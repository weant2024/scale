
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
    </style>

    <div>
        <label for="start-date">Data Inicial:</label>
        <input type="date" id="start-date">
        <label for="end-date">Data Final:</label>
        <input type="date" id="end-date">
        <button onclick="atualizarCalendario()">Atualizar Calendário</button>
    </div>
    <div id="calendar"></div>

    <?php
    include "sec/config.php";

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
        $query_horarios = "SELECT id_usuario, horarioinicio, horariofim, dia, mes, ano FROM escala WHERE id_usuario IN ($ids)";
        $resultado_horarios = $conn->query($query_horarios);
        
        if ($resultado_horarios->num_rows > 0) {
            while ($row = $resultado_horarios->fetch_assoc()) {
                $data = sprintf('%04d-%02d-%02d', $row['ano'], $row['mes'], $row['dia']);
                $horarios[$row['id_usuario']][$data] = $row['horarioinicio'] . ' - ' . $row['horariofim'];
            }
        } else {
            // Se não houver horários na tabela 'escala', buscar na tabela 'afastamento'
            $query_afastamento = "SELECT id_usuario, motivo, 
                                  STR_TO_DATE(datainicial, '%d/%m/%Y') as datainicial, 
                                  STR_TO_DATE(datafinal, '%d/%m/%Y') as datafinal 
                                  FROM afastamento 
                                  WHERE id_usuario IN ($ids)";
            $resultado_afastamento = $conn->query($query_afastamento);
            
            if ($resultado_afastamento->num_rows > 0) {
                while ($row = $resultado_afastamento->fetch_assoc()) {
                    $dataInicial = $row['datainicial'];
                    $dataFinal = $row['datafinal'];
                    $motivo = $row['motivo'];
    
                    // Adicionar as informações de afastamento ao array de horários
                    $datas = [];
                    $currentDate = new DateTime($dataInicial);
                    $endDate = new DateTime($dataFinal);
                    
                    while ($currentDate <= $endDate) {
                        $dataFormatted = $currentDate->format('Y-m-d');
                        $datas[$dataFormatted] = "$motivo ($dataInicial - $dataFinal)";
                        $currentDate->modify('+1 day');
                    }
                    
                    $horarios[$row['id_usuario']] = $motivo;
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
    <script src="assets/js/calendario.js"></script>
