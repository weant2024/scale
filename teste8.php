<?php 
include "tudo_cima.php";
if ($nivel < 2) {
    header("Location: sem_acesso.php");
    exit;
}
?>

<!-- INICIA CONTEÚDO -->  
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contratos'])) {
    $contratosSelecionados = $_POST['contratos'];
    $contratosString = implode(',', array_map('intval', $contratosSelecionados));

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['profissionais'])) {
        $profissionaisSelecionados = $_POST['profissionais'];
        $profissionaisString = implode(',', array_map('intval', $profissionaisSelecionados));
    ?>
        <form method='POST' action=''>

    <div id="my-div">
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
            #calendar-container {
                overflow-x: auto; /* Adiciona barra de rolagem horizontal */
                overflow-y: hidden; /* Esconde a barra de rolagem vertical se existir */
                white-space: nowrap; /* Impede a quebra de linha dos conteúdos */
            }

            #calendar {
                display: inline-block; /* Garante que o calendário seja tratado como bloco inline */
            }
    </style>

        <div>
            <label for="start-date">Data Inicial:</label>
            <input type="date" id="start-date" name="start-date">
            <label for="end-date">Data Final:</label>
            <input type="date" id="end-date" name="end-date">
            <button type="button" onclick="atualizarCalendario()">Atualizar Calendário</button>
        </div>
        <div id="calendar-container">
            <div id="calendar"></div>
        </div>

        <?php   

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $profissionais = isset($_POST['profissionais']) ? $_POST['profissionais'] : [];
            
            // Sanitizar e preparar os IDs dos profissionais para a consulta
            $profissionaisSanitizados = array_map('intval', $profissionais);
            $ids = implode(',', $profissionaisSanitizados);
            
            // Obter os nomes dos profissionais
            $query_profissional_usuario = "SELECT id, nome FROM usuario WHERE id IN ($ids)";
            $resultado_profissional_usuario = $conn->query($query_profissional_usuario);
            
            $profissionaisNomes = [];
            if ($resultado_profissional_usuario->num_rows > 0) {
                while ($row = $resultado_profissional_usuario->fetch_assoc()) {
                    $profissionaisNomes[$row['id']] = $row['nome'];
                }
            }
            
            // Obter os horários da tabela 'escala'
            $horarios = [];
            $query_horarios = "SELECT id_usuario, id_afastamento, horarioinicio, horariofim, dia, mes, ano FROM escala WHERE id_usuario IN ($ids)";
            $resultado_horarios = $conn->query($query_horarios);
            
            if ($resultado_horarios->num_rows > 0) {
                while ($row = $resultado_horarios->fetch_assoc()) {
                    $data = sprintf('%04d-%02d-%02d', $row['ano'], $row['mes'], $row['dia']);
                    $id_afastamento_horario = $row['id_afastamento'];
                    if ($id_afastamento_horario == 0) {
                        $horarios[$row['id_usuario']][$data] = $row['horarioinicio']. 'h' . ' até ' . $row['horariofim']. 'h';
                    } else {
                        $query_afastamento = "SELECT id_usuario, motivo, 
                                              STR_TO_DATE(datainicial, '%d/%m/%Y') as datainicial, 
                                              STR_TO_DATE(datafinal, '%d/%m/%Y') as datafinal 
                                              FROM afastamento 
                                              WHERE id_usuario IN ($ids) AND id = '$id_afastamento_horario'";
                        $resultado_afastamento = $conn->query($query_afastamento);
                        if ($resultado_afastamento->num_rows > 0) {
                            $dados_afastamento = $resultado_afastamento->fetch_assoc();
                            $data_inicial = $dados_afastamento['datainicial'];
                            $data_final = $dados_afastamento['datafinal'];
            
                            if ($data >= $data_inicial && $data <= $data_final) {
                                $horarios[$row['id_usuario']][$data] = $dados_afastamento['motivo'];
                            } else {
                                $horarios[$row['id_usuario']][$data] = $row['horarioinicio']. 'h' . ' até ' . $row['horariofim']. 'h';
                            }
                        }
                    }
                }
            }
        
            // Converter a lista de profissionais e horários para JSON
            $profissionaisJson = json_encode(array_values($profissionaisNomes));
            $horariosJson = json_encode($horarios);
        } else {
            echo "Nenhum dado foi enviado.";
            $profissionaisJson = json_encode([]);
            $horariosJson = json_encode([]);
        }
        ?>
        
        <script>
            const usuarios = <?php echo $profissionaisJson; ?>;
            const horarios = <?php echo $horariosJson; ?>;
        </script>

        <?php        
        // Separando a string em um array
        $contratosArray = explode(",", $contratosString);

        $contratoInfo = "";
        foreach ($contratosArray as $contrato) {
            // Sanitizando o valor de $contrato
            $contrato = intval($contrato);

            // Executando a consulta para cada contrato
            $query_relacao_contrato_adicionarturo = "SELECT * FROM relacao_contrato WHERE id_contrato IN ($contrato)";
            $resultado_relacao_contrato_adicionarturo = $conn->query($query_relacao_contrato_adicionarturo);

            if ($resultado_relacao_contrato_adicionarturo) {
                $dados_relacao_contrato_adicionarturo = $resultado_relacao_contrato_adicionarturo->fetch_assoc();
                if ($dados_relacao_contrato_adicionarturo) {
                    $id_local_relacao_contrato_adicionarturo = $dados_relacao_contrato_adicionarturo['id_local'];
                        $query_local_contrato = "SELECT * FROM local WHERE id = $id_local_relacao_contrato_adicionarturo";
                            $resultado_local_contrato = $conn->query($query_local_contrato);
                                $dados_local_contrato = $resultado_local_contrato->fetch_assoc();
                                    $nome_local_contrato = $dados_local_contrato['nome'];

                
                    
                    $contratoInfo .= '  
                                    <option value=' . $id_local_relacao_contrato_adicionarturo . '>' . $nome_local_contrato . '</option>                                    
                                    ';
                } else {
                    $contratoInfo .= "Nenhum local encontrado para o contrato: " . $contrato . "<br>";
                }
            } else {
                $contratoInfo .= "Erro na consulta para o contrato: " . $contrato . "<br>";
            }
        }
        ?>

        <script>
            // Dados dos usuários e horários são passados pelo PHP
            // const usuarios = ['Usuario 1', 'Usuario 2', 'Usuario 3']; // Remova esta linha

            // Função para criar o calendário
            function criarCalendario(dias) {
                const calendarDiv = document.getElementById('calendar');
                calendarDiv.innerHTML = ''; // Limpa o calendário existente
                const table = document.createElement('table');

                // Cabeçalho com as datas
                const thead = document.createElement('thead');
                const headerRow = document.createElement('tr');
                const emptyCell = document.createElement('th');
                headerRow.appendChild(emptyCell);

                dias.forEach(dia => {
                    const th = document.createElement('th');
                    th.textContent = formatarData(dia);
                    headerRow.appendChild(th);
                });

                thead.appendChild(headerRow);
                table.appendChild(thead);

                // Corpo com os usuários e horários
                const tbody = document.createElement('tbody');

                usuarios.forEach((usuario, index) => {
                    const row = document.createElement('tr');
                    const userCell = document.createElement('td');
                    userCell.textContent = usuario;
                    row.appendChild(userCell);

                    dias.forEach(dia => {
                        const cell = document.createElement('td');
                        cell.textContent = obterHorario(index, dia);
                        cell.addEventListener('click', () => abrirFormulario(usuario, dia));
                        row.appendChild(cell);
                    });

                    tbody.appendChild(row);
                });

                table.appendChild(tbody);
                calendarDiv.appendChild(table);
            }

            // Função para formatar a data no formato DD/MM/AAAA
            function formatarData(dateString) {
                const [year, month, day] = dateString.split('-');
                return `${day}/${month}/${year}`;
            }

            // Função para obter o horário
            function obterHorario(usuarioIndex, dia) {
                const usuarioId = Object.keys(horarios)[usuarioIndex];
                return horarios[usuarioId] && horarios[usuarioId][dia] ? horarios[usuarioId][dia] : '';
            }

            // Função para abrir o formulário na div 'adicionar-turno'
            function abrirFormulario(usuario, dia) {
                const adicionarTurnoDiv = document.getElementById('adicionar-turno');
                adicionarTurnoDiv.innerHTML = `
                    <form id="formTurno">
                        <h3>Adicionar Turno para ${usuario} em ${formatarData(dia)}</h3>
                        <label for="horarioinicio">Horário de Início:</label>
                        <input type="time" id="horarioinicio" name="horarioinicio"><br>
                        <label for="horariofim">Horário de Fim:</label>
                        <input type="time" id="horariofim" name="horariofim"><br>
                        <label for="local">Local:</label>
                        <select name="select">
                        ${`<?php echo $contratoInfo; ?>`}
                        </select><br><br> 
                        <button type="submit">Salvar</button>
                    </form>
                `;
            }

             // Adicionar um listener para o envio do formulário
            document.getElementById('formTurno').addEventListener('submit', function(event) {
                event.preventDefault(); // Evitar o envio padrão do formulário

                const formData = new FormData(this);

                fetch('enviaturno.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('resposta').innerHTML = data; // Mostrar a resposta do servidor
                })
                .catch(error => {
                    console.error('Erro:', error);
                    document.getElementById('resposta').innerHTML = "Erro ao processar o formulário.";
                });
            });

            // Função para obter os dias entre duas datas
            function obterDiasEntre(startDate, endDate) {
                const dias = [];
                let currentDate = new Date(startDate);
                const end = new Date(endDate);

                while (currentDate <= end) {
                    dias.push(currentDate.toISOString().split('T')[0]);
                    currentDate.setDate(currentDate.getDate() + 1);
                }

                return dias;
            }

            // Função para obter a data de hoje e os próximos 6 dias
            function obterDiasIniciais() {
                const hoje = new Date();
                const dias = [];
                for (let i = 0; i < 7; i++) {
                    const data = new Date(hoje);
                    data.setDate(hoje.getDate() + i);
                    dias.push(data.toISOString().split('T')[0]);
                }
                return dias;
            }

            // Função para atualizar o calendário com base no intervalo de datas
            function atualizarCalendario() {
                const startDate = document.getElementById('start-date').value;
                const endDate = document.getElementById('end-date').value;

                if (startDate && endDate) {
                    const dias = obterDiasEntre(startDate, endDate);
                    criarCalendario(dias);
                } else {
                    alert('Por favor, selecione as datas inicial e final.');
                }
            }

            // Chama a função para criar o calendário ao carregar a página com um intervalo de datas padrão
            window.onload = () => {
                const diasIniciais = obterDiasIniciais();
                criarCalendario(diasIniciais);
            };
        </script>

        <div id="adicionar-turno"></div>


    </div>
    


    <?php  
        
    } else {
    ?>
    <form method='POST' action=''> Já tem contrato selecionado 
    <div class="form-group">
        <label>Selecione o(s) contrato(s): <a href='#' id='reset-button'><img src='assets/img/lock.jpeg' width='30px'></a></label>
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

    <div class="form-group">
        <button type="submit">SELECIONAR</button>    
    </div>

    <?php
    }
} else {
    ?>
    <form method='POST' action=''> Não tem contrato selecionado 
    <div class="form-group">
        <label>Selecione o(s) contrato(s): <a href='#' id='reset-button'><img src='assets/img/unlock.jpeg' width='30px'></a></label>
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

    <div class="form-group">
        <button type="submit">SELECIONAR</button>    
    </div>

    <?php
}    
?>

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
                checkbox.disabled = false;

                // Remove o atributo onclick das checkboxes
                checkbox.removeAttribute('onclick');
            });

            // Limpar os valores exibidos
            selectedValuesContainer.innerHTML = '';
            selectedValuesProfissionais.innerHTML = '';
        });

    });
</script>

    

</form>



<!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>
