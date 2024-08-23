<?php
include "sec_verifica.php";

// Verifique se os parâmetros de data foram fornecidos
if (!isset($_GET['start_date']) || !isset($_GET['end_date'])) {
    echo json_encode(['error' => 'Parâmetros de data ausentes']);
    exit;
}

$startDate = $_GET['start_date'];
$endDate = $_GET['end_date'];

// Consulta para obter os horários dos funcionários entre as datas especificadas
$sql = "SELECT DISTINCT e.id, e.id_usuario, e.id_afastamento, e.horarioinicio, e.horariofim, e.id_local, e.dia, e.mes, e.ano, r.id_usuario, r.id_cliente
FROM escala e
JOIN relacao_cliente r ON e.id_usuario = r.id_usuario
WHERE r.id_cliente = $id_cliente_vdl_licenca
AND CONCAT(e.ano, '-', LPAD(e.mes, 2, '0'), '-', LPAD(e.dia, 2, '0')) BETWEEN '$startDate' AND '$endDate'";
$result = $conn->query($sql);

$employees = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Obter o nome do funcionário a partir do id_usuario
        $id_usuario = $row['id_usuario'];
        $id_local = $row['id_local'];
        $sql_nome = "SELECT login FROM usuario WHERE id = $id_usuario";
        $result_nome = $conn->query($sql_nome);

        $login = '';
        if ($result_nome->num_rows > 0) {
            $login = $result_nome->fetch_assoc()['login'];
        }

        $id_afastamento = $row['id_afastamento'];
        $motivo_afastamento = '';

        if ($id_afastamento) {
            $query_afastamento = "SELECT motivo FROM afastamento WHERE id = $id_afastamento";
            $result_afastamento = $conn->query($query_afastamento);
            if ($result_afastamento->num_rows > 0) {
                $motivo_afastamento = $result_afastamento->fetch_assoc()['motivo'];
            }
        }

        $query_local = "SELECT nome FROM local WHERE id = $id_local";
        $resultado_local = $conn->query($query_local);
        $dados_local = $resultado_local->fetch_assoc();

        $schedule = $motivo_afastamento ? "$motivo_afastamento" : $row['horarioinicio'] . ' - ' . $row['horariofim'];
        $location = $motivo_afastamento ? '' : $dados_local['nome'];

        $employees[] = array(
            'id' => $row['id'],
            'name' => $login,
            'schedule' => $schedule,
            'location' => $location,
            'date' => $row['dia'] . '/' . $row['mes'] . '/' . $row['ano'],
            'motivo_afastamento' => $motivo_afastamento // Inclua o motivo de afastamento aqui
        );
    }
}

$conn->close();

echo json_encode($employees);
?>
