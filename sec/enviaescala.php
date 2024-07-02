<?php
include "config.php";
include "sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sec_tipo.php"); exit;
}


$idusuario = $_POST['nome'];
$inicioexpediente = $_POST['inicioexpediente'];
$iniciointervalo = $_POST['iniciointervalo'];
$finalintervalo = $_POST['finalintervalo'];
$finalexpediente = $_POST['finalexpediente'];
#$cargousuario = $_POST["cargousuario"];
#$departamentousuario = $_POST["departamentousuario"];
$dataescala = $_GET["data"];
list($escaladia, $escalames, $escalaano) = explode("-", $dataescala);

$horario = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$semana = date('w');
$operador = $_SESSION["UsuarioLogin"];

$busca2 = "SELECT * FROM usuario WHERE id='$idusuario'"; //faz a busca com as palavras enviadas
$query2 = $conn->query($busca2);
$dados2 = $query2->fetch_assoc();


switch ($mes){

case 1: $mes = "Janeiro"; break;
case 2: $mes = "Fevereiro"; break;
case 3: $mes = "Mar�o"; break;
case 4: $mes = "Abril"; break;
case 5: $mes = "Maio"; break;
case 6: $mes = "Junho"; break;
case 7: $mes = "Julho"; break;
case 8: $mes = "Agosto"; break;
case 9: $mes = "Setembro"; break;
case 10: $mes = "Outubro"; break;
case 11: $mes = "Novembro"; break;
case 12: $mes = "Dezembro"; break;

}


switch ($semana) {

case 0: $semana = "Domingo"; break;
case 1: $semana = "Segunda"; break;
case 2: $semana = "Ter�a"; break;
case 3: $semana = "Quarta"; break;
case 4: $semana = "Quinta"; break;
case 5: $semana = "Sexta"; break;
case 6: $semana = "S�bado"; break;

}
?>


<?php

// Preparando a primeira query
$query = "INSERT INTO escala (id_usuario, horarioinicio, intervaloinicio, intervalofim, horariofim, dia, mes, ano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($query);

if ($stmt === false) {
    die('Erro na preparação da query: ' . $conn->error);
}

$stmt->bind_param("issssssss", $idusuario, $inicioexpediente, $iniciointervalo, $finalintervalo, $finalexpediente, $escaladia, $escalames, $escalaano, $operador);

if (!$stmt->execute()) {
    die('Erro na execução da query: ' . $stmt->error);
}

$idusuario = $stmt->insert_id;


// Preparando a segunda query
$query1 = "INSERT INTO registroescala (id_usuario, horarioinicio, intervaloinicio, intervalofim, horariofim, dia, mes, ano, loghorario, logdia, logsemana, logmes, logano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt1 = $conn->prepare($query1);

if ($stmt1 === false) {
    die('Erro na preparação da query1: ' . $conn->error);
}

$stmt1->bind_param("isssssssssssss", $idusuario, $inicioexpediente, $iniciointervalo, $finalintervalo, $finalexpediente, $escaladia, $escalames, $escalaano, $horario, $dia, $semana, $mes, $ano, $operador);

if (!$stmt1->execute()) {
    die('Erro na execução da query1: ' . $stmt1->error);
}

$stmt->close();
$stmt1->close();

list($day, $month, $year) = explode("-", $dataescala);
$data = $day."/".$month."/".$year;

$nomeprofissional = $dados2['nome'];

$msg = "Escala para $nomeprofissional em $data com início em $inicioexpediente, criada com sucesso!";
echo "<script>alert( '$msg' );; window.location = '../criarescala.php';</script>";
?> 




