<?php 
include "tudo_cima.php";
if ($nivel < 2) {
    header("Location: sem_acesso.php"); exit;
}
?>

<!-- INICIA CONTEÚDO -->  
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contratos'])) {
    $contratosSelecionados = $_POST['contratos'];
    $contratosString = implode(',', array_map('intval', $contratosSelecionados));
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['profissionais'])) {
        echo "<form method='POST' action=''> Já tem contrato e profissional selecionado";
    } else {
    ?>
    <form method='POST' action=''> Já tem contrato selecionado 
    <div class="form-group">
        <label>Selecione o(s) contrato(s): <a src='#' id='reset-button'><img src='assets/img/lock.jpeg' width='30px'></a></label>
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
                            $checked = in_array($id_contrato, $contratosSelecionados) ? 'checked' : '';

                            echo '
                            <label class="selectgroup-item">
                                <input
                                    type="checkbox"
                                    name="contratos[]"
                                    value="' . $id_contrato . '"
                                    class="selectgroup-input contratos"
                                    disabled="disabled"
                                    ' . $checked . '
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
    <?php
    }
} else {
    ?>
    <form method='POST' action=''> Não tem contrato selecionado 
    <div class="form-group">
        <label>Selecione o(s) contrato(s): <a src='#' id='reset-button'><img src='assets/img/unlock.jpeg' width='30px'></a></label>
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
                            $checked = in_array($id_contrato, $_POST['contratos'] ?? []) ? 'checked' : '';

                            echo '
                            <label class="selectgroup-item">
                                <input
                                    type="checkbox"
                                    name="contratos[]"
                                    value="' . $id_contrato . '"
                                    class="selectgroup-input contratos"
                                    ' . $checked . '
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
    <?php
}    
?>

<div id="selected-values-container">
    <!-- Profissionais serão exibidos aqui -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contratos'])) {
        $contratosSelecionados = $_POST['contratos'];
        $contratosString = implode(',', array_map('intval', $contratosSelecionados));

        $query_contratos = "SELECT * FROM contrato WHERE id IN ($contratosString)";
        $resultado_contratos = $conn->query($query_contratos);

        $profissionaisAdicionados = array(); // Array para rastrear IDs dos profissionais adicionados

        if ($resultado_contratos->num_rows > 0) {
            echo '<div class="form-group">
                    <label>Selecione o(s) profissional(is):</label>
                    <div class="d-flex">
                        <div class="selectgroup selectgroup-pills">';
            while ($dados_contrato = $resultado_contratos->fetch_assoc()) {
                $id_contrato = $dados_contrato['id'];
                $query_usuario_etapa_relacao_cliente = "SELECT * FROM relacao_cliente WHERE id_contrato = $id_contrato";
                $resultado_usuario_etapa_relacao_cliente = $conn->query($query_usuario_etapa_relacao_cliente);

                if ($resultado_usuario_etapa_relacao_cliente->num_rows > 0) {
                    while ($dados_usuario_etapa_relacao_cliente = $resultado_usuario_etapa_relacao_cliente->fetch_assoc()) {
                        $id_usuario_dados_usuario_etapa_relacao_cliente = $dados_usuario_etapa_relacao_cliente['id_usuario'];

                        $query_profissionais = "SELECT * FROM usuario WHERE id = $id_usuario_dados_usuario_etapa_relacao_cliente";
                        $resultado_profissionais = $conn->query($query_profissionais);

                        if ($resultado_profissionais->num_rows > 0) {
                            while ($dados_profissional = $resultado_profissionais->fetch_assoc()) {
                                $id_profissional = $dados_profissional['id'];
                                if (!in_array($id_profissional, $profissionaisAdicionados)) {
                                    $nome_profissional = $dados_profissional['nome'];
                                    echo '<label class="selectgroup-item">
                                            <input type="checkbox" name="profissionais[]" value="' . $id_profissional . '" class="selectgroup-input profissionais" />
                                            <span class="selectgroup-button">' . $nome_profissional . '</span>
                                        </label>';

                                    // Adiciona o ID do profissional ao array de rastreamento
                                    $profissionaisAdicionados[] = $id_profissional;
                                }
                            }
                        } else {
                            echo "Nenhum profissional vinculado ao(s) contrato(s)";
                        }
                    }
                }
            }
            echo '</div>
                </div>
            </div>';
        } else {
            echo "Nenhum contrato encontrado para os IDs selecionados.";
        }
    }
    ?>
</div>

<div id="selected-values-profissionais">
    <!-- Valores dos profissionais selecionados serão exibidos aqui -->
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxesContratos = document.querySelectorAll('.selectgroup-input.contratos');
        const checkboxesProfissionais = document.querySelectorAll('.selectgroup-input.profissionais');
        const selectedValuesContainer = document.getElementById('selected-values-container');
        const selectedValuesProfissionais = document.getElementById('selected-values-profissionais');

        checkboxesContratos.forEach(checkbox => {
            checkbox.addEventListener('change', updateSelectedValues);
        });

        checkboxesProfissionais.forEach(checkbox => {
            checkbox.addEventListener('change', updateSelectedProfissionais);
        });

        function updateSelectedValues() {
            const selectedValues = Array.from(checkboxesContratos)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value);

            if (selectedValues.length > 0) {
                selectedValuesContainer.innerHTML = '<b>Contratos Selecionados:</b> ' + selectedValues.join(', ');
            } else {
                selectedValuesContainer.innerHTML = '';
            }
        }

        function updateSelectedProfissionais() {
            const selectedProfissionais = Array.from(checkboxesProfissionais)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value);

            if (selectedProfissionais.length > 0) {
                selectedValuesProfissionais.innerHTML = '<b>Profissionais Selecionados:</b> ' + selectedProfissionais.join(', ');
            } else {
                selectedValuesProfissionais.innerHTML = '';
            }
        }

        // Adicionar evento ao botão de reset
        const resetButton = document.getElementById('reset-button');
        resetButton.addEventListener('click', function() {
            // Desmarcar todas as checkboxes
            checkboxesContratos.forEach(checkbox => {
                checkbox.checked = false;
                checkbox.disabled = false;
            });

            checkboxesProfissionais.forEach(checkbox => {
                checkbox.checked = false;
                checkbox.disabled = true;
            });

            // Limpar os valores exibidos
            selectedValuesContainer.innerHTML = '';
            selectedValuesProfissionais.innerHTML = '';
        });

    });
</script>

<div class="form-group">
    <button type="submit">SELECIONAR</button>    
</div>

</form>




<!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>
