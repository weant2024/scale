<?php
include "tudo_cima.php"; 
if ($nivel < 2) {
    header("Location: sem_acesso.php"); 
    exit;
}
?>
<!-- INICIA CONTEÚDO -->  

<?php
$data = $_GET ['data'];
?>

<script>
    function atualizarLocais() {
        var idContrato = document.getElementById('contrato').value;
        var selectLocal = document.getElementById('localdetrabalho');
        
        // Limpar opções existentes
        selectLocal.innerHTML = '<option value="">Carregando...</option>';
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'sec/get_local_trabalho.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var locais = JSON.parse(xhr.responseText);
                
                // Limpar opções existentes
                selectLocal.innerHTML = '';
                
                if (locais.length > 0) {
                    locais.forEach(function(local) {
                        var option = document.createElement('option');
                        option.value = local.nome;
                        option.textContent = local.nome;
                        selectLocal.appendChild(option);
                    });
                } else {
                    selectLocal.innerHTML = '<option value="">Nenhum local disponível</option>';
                }
            }
        };
        xhr.send('id_exibe_contratos=' + encodeURIComponent(idContrato));
        
        atualizarProfissionais(); // Atualiza a lista de profissionais ao selecionar o contrato
    }

    function atualizarProfissionais() {
        var idContrato = document.getElementById('contrato').value;
        var selectProfissional = document.getElementById('profissional');
        
        // Limpar opções existentes
        selectProfissional.innerHTML = '<option value="">Carregando...</option>';
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'sec/get_profissionais.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var profissionais = JSON.parse(xhr.responseText);
                
                // Limpar opções existentes
                selectProfissional.innerHTML = '';
                
                if (profissionais.length > 0) {
                    profissionais.forEach(function(profissional) {
                        var option = document.createElement('option');
                        option.value = profissional.id;
                        option.textContent = profissional.nome;
                        selectProfissional.appendChild(option);
                    });
                } else {
                    selectProfissional.innerHTML = '<option value="">Nenhum profissional disponível</option>';
                }
            }
        };
        xhr.send('id_exibe_contratos=' + encodeURIComponent(idContrato));
    }
</script>   

<form method="POST" action="sec/enviaturno2.php">
    <div class="form-group form-group-default">
        <label><b>Contrato:</b></label>
        <select class="form-select" id="contrato" name="id_exibe_contratos" onchange="atualizarLocais();">
            <option value="">Selecione um contrato</option>
            <?php
            $query_coleta_contrato = "SELECT id_contrato FROM relacao_cliente WHERE id_usuario = '$idlogado'";
            $resultado_coleta_contrato = $conn->query($query_coleta_contrato);
            
            if ($resultado_coleta_contrato->num_rows > 0) {
                while ($dados_coleta_contrato = $resultado_coleta_contrato->fetch_assoc()) {
                    $id_coleta_contrato = $dados_coleta_contrato['id_contrato'];
                    
                    // Exibir contratos com status 1
                    $query_exibe_contratos = "SELECT * FROM contrato WHERE id = '$id_coleta_contrato' AND status = 1";
                    $resultado_exibe_contratos = $conn->query($query_exibe_contratos);
                    
                    if ($resultado_exibe_contratos->num_rows > 0) {
                        $dados_exibe_contratos = $resultado_exibe_contratos->fetch_assoc();
                        $id_exibe_contratos = $dados_exibe_contratos['id'];
                        $nome_exibe_contratos = $dados_exibe_contratos['nome'];
                        
                        echo '<option value="' . $id_exibe_contratos . '">' . $nome_exibe_contratos . '</option>';
                    }
                }
            } else {
                echo '<option value="">Nenhum contrato vinculado ao Usuário logado</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group form-group-default">
        <label><b>Local de trabalho:</b></label>
        <select class="form-select" id="localdetrabalho" name="localdetrabalho" onchange="atualizarProfissionais();">
            <option value="">Selecione um contrato para ver os locais</option>
        </select>
    </div>

    <div class="form-group form-group-default">
        <label><b>Profissional:</b></label>
        <select class="form-select" id="profissional" name="profissional">
            <option value="">Selecione um local para ver os profissionais</option>
        </select>
    </div>

    <div class="form-group form-group-default">
        <label for="iniciodeexpediente"><b>Início de expediente:</b></label>
        <input type="time" class="form-control" id="iniciodeexpediente" name="iniciodeexpediente">                
    </div>

    <div class="form-group form-group-default">
        <label for="fimdeexpediente"><b>Fim de expediente:</b></label>
        <input type="time" class="form-control" id="fimdeexpediente" name="fimdeexpediente">                
    </div>

    <button class="botao" type="submit">Cadastrar Turno</button>
    
    <input type="hidden" name="data" value="<?php echo $data; ?>">
</form>
<!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>
</body>
</html>
