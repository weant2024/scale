<?php 
include "tudo_cima.php";
if ($nivel < 2) {
    header("Location: sem_acesso.php"); exit;
}
?>

<!-- INICIA CONTEÚDO -->   

<form method="POST" action="teste3.php">

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
        <label>Selecione o(s) profissional(is):</label>
        <div class="d-flex">        
            <div class="selectgroup selectgroup-pills">
                <div id="profissionais-container">
                    <!-- Profissionais serão carregados aqui via JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <div id="conteudo-contratos">
        <!-- Conteúdo do PHP será carregado aqui -->
    </div>

    <script src="assets/js/calendario.js"></script>
    <script src="assets/js/carregar-contrato-usuario.js"></script>
    
    <div class="form-group">
        <button type="submit">SELECIONAR</button>
    </div>

</form>

<!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>
