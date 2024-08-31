<?php
include "tudo_cima.php"; 
if ( $nivel < 2 ) 
{
	header("Location: sem_acesso.php"); exit;
}
?>

<?php
$id_escala = $_GET['id'];

$query_escala = "SELECT * FROM escala WHERE id='$id_escala'";
    $resultado_escala = $conn->query($query_escala);
        $dados_escala = $resultado_escala->fetch_assoc();
            $id_usuario_escala = $dados_escala['id_usuario']; 
            $id_contrato_escala = $dados_escala['id_contrato'];  
            $id_local_escala = $dados_escala['id_local'];          
            $inicioexpediente_escala = $dados_escala['horarioinicio'];
            $intervaloinicio_escala = $dados_escala['intervaloinicio'];
            $intervalofim_escala = $dados_escala['intervalofim'];
            $horariofim_escala = $dados_escala['horariofim'];            
            $dia_escala = $dados_escala['dia'];
            $mes_escala = $dados_escala['mes'];
            $ano_escala = $dados_escala['ano'];
            
            // switch ($inicioexpediente_escala) {
            //     case "01:00:00":
            //         $inicioexpediente = "01-07";
            //         break;
            //     case "07:00:00":
            //         $inicioexpediente = "07-13";
            //         break;
            //     case "13:00:00":
            //         $inicioexpediente = "13-19";
            //         break;
            //     case "19:00:00":
            //         $inicioexpediente = "19-01";
            //         break;
            //     default:
            //         break;
            // }

$query_contrato = "SELECT nome FROM contrato WHERE id = '$id_contrato_escala'";
    $resultado_contrato = $conn->query($query_contrato);
        $dados_contrato = $resultado_contrato->fetch_assoc();
            $nome_contrato = $dados_contrato['nome'];

$query_local = "SELECT nome FROM local WHERE id = '$id_local_escala'";
    $resultado_local = $conn->query($query_local);
            $dados_local = $resultado_local->fetch_assoc();
                $nome_local = $dados_local['nome'];

$query_usuarioescalado = "SELECT * FROM usuario WHERE id='$id_usuario_escala'";   
    $resultado_usuarioescalado = $conn->query($query_usuarioescalado);
        $dados_usuarioescalado = $resultado_usuarioescalado->fetch_assoc();
            $nome_usuarioescalado = $dados_usuarioescalado['nome'];
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
                                option.value = local.id;
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

        <form method="POST" action="sec/atualizaturno.php">

            <div class="form-group form-group-default">
                <label><b>Contrato:</b></label>
                <select class="form-select" id="contrato" name="id_exibe_contratos" onchange="atualizarLocais();">
                    <option value="<?php echo $id_contrato_escala; ?>"><?php echo $nome_contrato;?></option>
                    <?php
                    $query_coleta_contrato = "SELECT id_contrato FROM relacao_cliente WHERE id_usuario = '$idlogado'";
                    $resultado_coleta_contrato = $conn->query($query_coleta_contrato);
                    
                    if ($resultado_coleta_contrato->num_rows > 0) {
                        while ($dados_coleta_contrato = $resultado_coleta_contrato->fetch_assoc()) {
                            $id_coleta_contrato = $dados_coleta_contrato['id_contrato'];
                            
                            if ($id_coleta_contrato != $id_contrato_escala) {
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
                    <option value=""><?php echo $nome_local;?></option>
                </select>
            </div>

            <div class="form-group form-group-default">
                <label><b>Profissional:</b></label>
                <select class="form-select" id="profissional" name="profissional">
                    <option value=""><?php echo $nome_usuarioescalado;?></option>
                </select>
            </div>

            <div class="form-group form-group-default">
                <label for="iniciodeexpediente"><b>Início de expediente:</b></label>
                <input type="time" class="form-control" id="iniciodeexpediente" name="iniciodeexpediente" value="<?php echo $inicioexpediente_escala ?>">                
            </div>

            <div class="form-group form-group-default">
                <label for="fimdeexpediente"><b>Fim de expediente:</b></label>
                <input type="time" class="form-control" id="fimdeexpediente" name="fimdeexpediente" value="<?php echo $horariofim_escala ?>">                
            </div>

            <input type="hidden" name="id_escala" value="<?php echo $id_escala; ?>">

        <div class="selecionar">
            <div class="nav">
                <button class="botao" type="submit">Atualizar turno</button>        
            </div>
        </div>
    </form>

    <div id="validacaoinfo"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function(){
        // Função para enviar os dados do formulário via POST
        $('select').on('change', function() {
            // Coleta os dados do formulário
            var nome = $('#nome').val();
            var horarioexpediente = $('#horarioexpediente').val();
            var localdetrabalho = $('#localdetrabalho').val();

            // Envia os dados via POST
            $.ajax({
                url: 'sec/edita_coletadados.php?id=<?php echo $id_escala; ?>&dia=<?php echo $dia_escala; ?>&mes=<?php echo $mes_escala; ?>&ano=<?php echo $ano_escala; ?>',
                type: 'POST',
                data: {
                    nome: nome,
                    horarioexpediente: horarioexpediente,
                    localdetrabalho: localdetrabalho
                },
                success: function(data) {
                    $('#validacaoinfo').html(data);
                },
                error: function() {
                    $('#validacaoinfo').html('<p>Erro ao carregar os dados.</p>');
                }
            });
        });
    });
    </script>


<?php
include "tudo_baixo.php";
?>