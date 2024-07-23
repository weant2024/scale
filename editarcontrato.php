<?php
include "tudo_cima.php"; 
if ($nivel < 2) {
    header("Location: sem_acesso.php");
    exit;
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<style>
    .border-changed {
        border-color: #8800ff !important;
    }
    .color-label{
        color: #8800ff !important;
        font-weight: bold;
    }
    .form-group .naoaltera {
        font-size: 16px;
        padding: 8px;
        background-color: #f1f1f1;
        border-radius: 4px;
    }
</style>

<!-- INICIA CONTEÚDO -->
 
<p align="center">
    <b>EDITAR CONTRATO</b>
</p>

<?php
$id = $_GET['id'];

$sqlcontrato = "SELECT * FROM contrato WHERE id='$id'";
$querycontrato = $conn->query($sqlcontrato);
$dadoscontrato = $querycontrato->fetch_assoc();         
$nomecontrato = $dadoscontrato["nome"];
$statuscontrato = $dadoscontrato['status'];
?>

<form method="POST" action='sec/atualizarcontrato.php?id=<?php echo $id; ?>'>
    
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nomecontrato;?>"/>
    </div>
    <script>
        const nomeInput = document.getElementById('nome');
        const nome = '<?php echo $nomecontrato; ?>';
        function checknome() {
            if (nomeInput.value !== nome) {
                nomeInput.classList.add('border-changed');
            } else {
                nomeInput.classList.remove('border-changed');
            }
        }
        nomeInput.addEventListener('input', checknome);
        window.addEventListener('load', checknome);
    </script>    

    <div class="form-group">
        <label>Status:</label><br />
        <div class="d-flex">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="statuscontrato" id="statuscontrato" value="1" <?php if ($statuscontrato == "1") echo 'checked'; ?>/>
                <label class="form-check-label" for="1">Ativo</label>            
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="statuscontrato" id="statuscontrato" value="0" <?php if ($statuscontrato == "0") echo 'checked'; ?>/>
                <label class="form-check-label" for="0">Desativado</label>  
            </div>
        </div>
    </div>
    <script>
        const statuscontratoInputs = document.querySelectorAll('input[name="statuscontrato"]');
        const statuscontrato = '<?php echo $statuscontrato; ?>';

        function checkstatuscontrato() {
            statuscontratoInputs.forEach(input => {
                const label = input.nextElementSibling;
                if (input.checked && input.value !== statuscontrato) {
                    label.classList.add('color-label');
                } else {
                    label.classList.remove('color-label');
                }
            });
        }

        statuscontratoInputs.forEach(input => {
            input.addEventListener('change', checkstatuscontrato);
        });

        window.addEventListener('load', checkstatuscontrato);
    </script>

    <div class="form-group">
        <label>Vincule ao(s) profissional(is):</label><br />
        <?php include 'sec/pesquisa_coletausuarios_editarcontrato.php'; ?>  
    </div>

    <div class="form-group">
        <label class="form-label">Vincule ao(s) local(is):</label><br />
        <div id="locais-container">
        <?php
        $query_relacao_cliente_contrato = "SELECT * FROM local WHERE id_contrato = $id";
        $resultado_relacao_cliente_contrato = $conn->query($query_relacao_cliente_contrato);
        if ($resultado_relacao_cliente_contrato->num_rows > 0){
            while ($dados_relacao_cliente_contrato = $resultado_relacao_cliente_contrato->fetch_assoc()) {
                $id_local_relacao_cliente_contrato = $dados_relacao_cliente_contrato['id'];    
                $query_local_contrato = "SELECT * FROM local WHERE id = $id_local_relacao_cliente_contrato";   
                $resultado_local_contrato = $conn->query($query_local_contrato);
                while ($dados_local_contrato = $resultado_local_contrato->fetch_assoc()){
                    $id_local_contrato = $dados_local_contrato['id'];
                    $nome_local_contrato = $dados_local_contrato['nome'];
                    echo '
                        <div class="selectgroup selectgroup-pills">
                            <label class="selectgroup-item">                                                
                                <input type="checkbox" name="locais[]" value="' . $id_local_contrato . '" class="selectgroup-input contratos"';
                    $query_validacao_relacao_contrato_local = "SELECT * FROM relacao_contrato WHERE id_cliente = $id_cliente_vdl_licenca AND id_contrato = $id AND id_local = $id_local_contrato";
                    $resultado_validacao_relacao_contrato_local = $conn->query($query_validacao_relacao_contrato_local);
                    if ($resultado_validacao_relacao_contrato_local->num_rows > 0){
                        echo 'checked /><span class="selectgroup-button">' . $nome_local_contrato . '</span>                                                                  
                            </label> 
                        </div>';                    
                    } else {
                        echo '/><span class="selectgroup-button" style="color: #8800ff !important; font-weight: bold">' . $nome_local_contrato . '</span>                                                                  
                            </label> 
                        </div>';   
                    }
                }
            }
        } else {
            echo "Nenhum local cadastrado para esse(s) contrato(s)";
        }   
        ?>  
        </div>
    </div>  

    <!-- ADICIONAR LOCAL  -->
    <div class="form-group">
        <div id="dynamic-inputs">
        <label for="novo_local">Adicionar Local:</label>
            <div style="display: flex; align-items: center;">            
                <input type="text" id="novo_local" class="form-control" style="border-color: #8800ff !important; flex: 1; margin-right: 5px;"/>
                <button type="button" id="adicionar_local" class="btn btn-sm btn-outline-success">+</button>
            </div>
        </div>
    </div>
    
    <script>
        document.getElementById('adicionar_local').addEventListener('click', function() {
            const novoLocalInput = document.getElementById('novo_local');
            const novoLocalNome = novoLocalInput.value.trim();
            if (novoLocalNome) {
                const locaisContainer = document.getElementById('locais-container');
                const newLocalHTML = `
                    <div class="selectgroup selectgroup-pills">
                        <label class="selectgroup-item">    
                            <div style="display: flex; align-items: center;">                                            
                                <input type="checkbox" name="locais[]" value="novo_${novoLocalNome}" class="selectgroup-input contratos"/>
                                <span class="selectgroup-button" style="color: #8800ff !important; font-weight: bold">${novoLocalNome}</span>                                                                  
                                <button type="button" class="btn btn-sm btn-outline-danger remover-local">-</button>
                            </div>
                        </label> 
                    </div>`;
                locaisContainer.insertAdjacentHTML('beforeend', newLocalHTML);
                novoLocalInput.value = '';
            } else {
                alert('Digite um nome para o novo local.');
            }
        });

        document.getElementById('locais-container').addEventListener('click', function(event) {
            if (event.target.classList.contains('remover-local')) {
                const localItem = event.target.closest('.selectgroup-item');
                localItem.remove();
            }
        });
    </script>
   
    <div class="form-group">                                   
        <button class="botao" type="submit">EDITAR CONTRATO</button>                                
    </div>
</form>

<!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>
