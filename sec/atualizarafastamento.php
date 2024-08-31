<?php
include "config.php";
include "sec_verifica.php";

// Verifica o nível de acesso
if ($nivel < 2) {
    header("Location: sec_tipo.php");
    exit;
}

// Coleta e sanitiza os dados do POST
$id_afastamento = $_POST['id_afastamento'];
$id_usuario_selecionado = $_POST['id_usuario'];
$motivo = $_POST["motivo"];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];

// Formata as datas
$enviardatainicial = DateTime::createFromFormat('Y-m-d', $datainicial)->format('d/m/Y');
$enviardatafinal = DateTime::createFromFormat('Y-m-d', $datafinal)->format('d/m/Y');

// Cria objetos DateTime para as datas inicial e final
$dataInicialObj = new DateTime($datainicial);
$dataFinalObj = new DateTime($datafinal);

// Cria um intervalo de 1 dia e um período de datas
$intervalo = new DateInterval('P1D');
$periodo = new DatePeriod($dataInicialObj, $intervalo, $dataFinalObj->modify('+1 day'));

// Itera sobre o período e coleta os dias
$diasNoIntervalo = [];
foreach ($periodo as $data) {
    $diasNoIntervalo[] = $data->format('d/m/Y');
}

// Obtém dados atuais
$horario = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$semana = date('w');
$operador = $_SESSION["UsuarioLogin"];

// Mapeia meses e dias da semana
$meses = [
    1 => "Janeiro", 2 => "Fevereiro", 3 => "Março",
    4 => "Abril", 5 => "Maio", 6 => "Junho",
    7 => "Julho", 8 => "Agosto", 9 => "Setembro",
    10 => "Outubro", 11 => "Novembro", 12 => "Dezembro"
];

$semanaNomes = [
    0 => "Domingo", 1 => "Segunda", 2 => "Terça",
    3 => "Quarta", 4 => "Quinta", 5 => "Sexta", 6 => "Sábado"
];

$mes = $meses[(int)$mes];
$semana = $semanaNomes[(int)$semana];

// Preparando e executando a query para atualizar o afastamento
$query_update_afastamento = "UPDATE afastamento SET motivo=?, datainicial=?, datafinal=? WHERE id_usuario = ? AND id = ?";
$stmt_update_afastamento = $conn->prepare($query_update_afastamento);
$stmt_update_afastamento->bind_param("sssii", $motivo, $enviardatainicial, $enviardatafinal, $id_usuario_selecionado, $id_afastamento);

if (!$stmt_update_afastamento->execute()) {
    die('Erro na execução da query de atualização do afastamento: ' . $stmt_update_afastamento->error);
}

// Preparando e executando a query para inserir o registro do afastamento
$query1 = "INSERT INTO registroafastamento (id_afastamento, id_usuario, motivo, datanicial, datafinal, loghorario, logdia, logsemana, logmes, logano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt1 = $conn->prepare($query1);

if ($stmt1 === false) {
    die('Erro na preparação da query de registro do afastamento: ' . $conn->error);
}

$stmt1->bind_param("iisssssssss", $id_afastamento, $id_usuario_selecionado, $motivo, $enviardatainicial, $enviardatafinal, $horario, $dia, $semana, $mes, $ano, $operador);

if (!$stmt1->execute()) {
    die('Erro na execução da query de registro do afastamento: ' . $stmt1->error);
}

// Removendo as escalas antigas
$query_delete = "DELETE FROM escala WHERE id_afastamento = ? AND id_usuario = ?";
$stmt_delete = $conn->prepare($query_delete);
$stmt_delete->bind_param("ii", $id_afastamento, $id_usuario_selecionado);
if (!$stmt_delete->execute()) {
    die('Erro na execução da query de remoção de escalas: ' . $stmt_delete->error);
}

// Inserindo novas escalas
$query = "INSERT INTO escala (id_usuario, id_afastamento, id_local, horarioinicio, intervaloinicio, intervalofim, horariofim, dia, mes, ano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$query1 = "INSERT INTO registroescala (id_escala, id_usuario, id_afastamento, id_local, horarioinicio, intervaloinicio, intervalofim, horariofim, dia, mes, ano, loghorario, logdia, logsemana, logmes, logano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

foreach ($diasNoIntervalo as $dia) {
    list($diaSeparado, $mesSeparado, $anoSeparado) = explode('/', $dia);
    $null_campos = "afastado";      

    // Inserindo as novas escalas
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die('Erro na preparação da query de inserção de escala: ' . $conn->error);
    }
    $stmt->bind_param("iisssssssss", $id_usuario_selecionado, $id_afastamento, $null_campos, $null_campos, $null_campos, $null_campos, $null_campos, $diaSeparado, $mesSeparado, $anoSeparado, $operador);
    if (!$stmt->execute()) {
        die('Erro na execução da query de inserção de escala: ' . $stmt->error);
    }
    $id_escala = $stmt->insert_id;

    // Inserindo o registro das novas escalas
    $stmt1 = $conn->prepare($query1);
    if ($stmt1 === false) {
        die('Erro na preparação da query de registro de escala: ' . $conn->error);
    }
    $stmt1->bind_param("iiissssssssssssss", $id_escala, $id_usuario_selecionado, $id_afastamento, $null_campos, $null_campos, $null_campos, $null_campos, $null_campos, $diaSeparado, $mesSeparado, $anoSeparado, $horario, $dia, $semana, $mes, $ano, $operador);
    if (!$stmt1->execute()) {
        die('Erro na execução da query de registro de escala: ' . $stmt1->error);
    }
}

// Fecha as declarações e a conexão
$stmt->close();
$stmt1->close();
$stmt_update_afastamento->close();
$stmt_delete->close();
$conn->close();

// Mensagem de sucesso e redirecionamento
$msg = "Afastamento registrado com sucesso!";
echo "<script>alert('$msg'); window.location = '../pesquisarafastamento.php';</script>";
?>
