<?php 
include "tudo_cima.php";
if ($nivel < 2) {
    header("Location: sem_acesso.php"); exit;
}
?>

<!-- INICIA CONTEÚDO -->   

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: #f2f2f2;
    }
    .controls {
        margin-bottom: 20px;
    }
</style>

<h1>Calendário de Escala</h1>
<div>
    <label for="start-date">Data Inicial:</label>
    <input type="date" id="start-date">
    <label for="end-date">Data Final:</label>
    <input type="date" id="end-date">
    <button onclick="atualizarCalendario()">Atualizar Calendário</button>
</div>

<div class="form-group">
    <label>Selecione o(s) contrato(s):</label>
    <div class="d-flex">            
        <div class="selectgroup selectgroup-pills">
            <?php
            $query_validacao_contrato = "SELECT * FROM relacao_cliente WHERE id_usuario = '$idlogado'";
            $resultado_validacao_contrato = $conn->query($query_validacao_contrato);
            if ($resultado_validacao_contrato->num_rows > 0) {
                while ($dados_validacao_contrato = $resultado_validacao_contrato->fetch_assoc()) {
                    $id_contrato_validacao_contrato = $dados_validacao_contrato['id_contrato'];

                    $query_contrato = "SELECT * FROM contrato WHERE id = '$id_contrato_validacao_contrato'";
                    $resultado_contrato = $conn->query($query_contrato);
                    if ($resultado_contrato->num_rows > 0) {
                        while ($dados_contrato = $resultado_contrato->fetch_assoc()) {
                            $id_contrato = $dados_contrato['id'];
                            $nome_contrato = $dados_contrato['nome'];

                            echo '
                            <label class="selectgroup-item">
                                <input
                                    type="checkbox"
                                    name="contratos[]"
                                    value="' . $id_contrato . '"
                                    class="selectgroup-input contratos"
                                />
                                <span class="selectgroup-button">' . $nome_contrato . '</span>
                            </label>
                            ';
                        }
                    } else {
                        echo "<b style='color:red'>Nenhum contrato vinculado ao usuário logado</b>";
                    }
                }
            } else {
                echo "<b style='color:red'>Nenhum contrato vinculado ao usuário logado</b>";
            }
            ?>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="d-flex">
        <label>Selecione o(s) profissional(is):</label>
        <div id="profissionais-container">
            <!-- Profissionais serão carregados aqui via JavaScript -->
        </div>
    </div>
</div>

<div id="conteudo-contratos">
    <!-- Conteúdo do PHP será carregado aqui -->
</div>


<div id="selected-profissionais">
    <!-- Os valores das checkboxes selecionadas serão exibidos aqui -->
</div>

    <form method="post" action="">
        <div id="profissionaisContainer">
            <!-- Aqui os checkboxes dos profissionais serão inseridos via AJAX -->
        </div>
        <button type="button" id="travarBotao" onclick="alternarTravarCheckboxes()">Travar Seleção</button>
    </form>

    <script>
        function alternarTravarCheckboxes() {
        const checkboxesProfissionais = document.querySelectorAll('.profissionais');    
        const checkboxesContratos = document.querySelectorAll('.contratos');
        const botao = document.getElementById('travarBotao');
        
        const algumCheckboxDestravado = Array.from(checkboxesProfissionais).some(checkbox => !checkbox.disabled) ||
                                        Array.from(checkboxesContratos).some(checkbox => !checkbox.disabled);
        
        if (algumCheckboxDestravado) {
            checkboxesProfissionais.forEach(checkbox => {
                checkbox.disabled = true;
            });

            checkboxesContratos.forEach(checkbox => {
                checkbox.disabled = true;
            });
            botao.textContent = "Destravar seleção";
        } else {
            checkboxesProfissionais.forEach(checkbox => {
                checkbox.disabled = false;
            });

            checkboxesContratos.forEach(checkbox => {
                checkbox.disabled = false;
            });
            botao.textContent = "Travar seleção";
        }
    }
    </script>

<script>
    // Dados de exemplo
    const usuarios = [
        '<?php echo "teste1"; ?>',
        'Usuario 2',
        'Usuario 3'
    ];
</script>
<div id="calendar"></div>
    
<script src="assets/js/calendario.js"></script>
<script src="assets/js/carregar-contrato.js"></script>
<script src="assets/js/carregar-usuario.js"></script>

<!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>
