<?php
include "config.php";
include "sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sec_tipo.php"); exit;
}

$data = $_POST['data'];
list($escaladia, $escalames, $escalaano) = explode("/", $data);

$contrato = $_POST['id_exibe_contratos'];
$localdetrabalho = $_POST['localdetrabalho'];
$profissional = $_POST['profissional'];
#$cargousuario = $_POST["cargousuario"];
#$departamentousuario = $_POST["departamentousuario"];

$iniciodeexpediente = $_POST['iniciodeexpediente'];  
$fimdeexpediente = $_POST['fimdeexpediente'];  

$horario = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$semana = date('w');
$operador = $_SESSION["UsuarioLogin"];



$busca2 = "SELECT * FROM usuario WHERE id='$profissional'"; //faz a busca com as palavras enviadas
$query2 = $conn->query($busca2);
$dados2 = $query2->fetch_assoc();

switch ($mes) {

case 1: $mes = "Janeiro"; break;
case 2: $mes = "Fevereiro"; break;
case 3: $mes = "Março"; break;
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
case 2: $semana = "Terça"; break;
case 3: $semana = "Quarta"; break;
case 4: $semana = "Quinta"; break;
case 5: $semana = "Sexta"; break;
case 6: $semana = "Sábado"; break;

}

// $horarioexpediente_selecionado = $_GET['horarioexpediente'];
//     switch ($horarioexpediente_selecionado) {
//         case "01-07":           
//             $iniciointervalo = "04:00";
//             $finalintervalo = "04:15:";            
//             break;
//         case "07-13":
//             $inicioexpediente = "07:00";
//             $iniciointervalo = "10:00";
//             $finalintervalo = "10:15";
//             $finalexpediente = "13:00";
//             break;
//         case "13-19":
//             $inicioexpediente = "13:00";
//             $iniciointervalo = "16:00";
//             $finalintervalo = "16:15";
//             $finalexpediente = "19:00";
//             break;
//         case "19-01":
//             $inicioexpediente = "19:00";
//             $iniciointervalo = "21:00";
//             $finalintervalo = "21:15";
//             $finalexpediente = "01:00";
//             break;
//         default:
//             // Caso nenhum dos valores seja correspondido
//             // Defina um comportamento padrão aqui, se necessário
//             break;
//     }





// Converter os horários para objetos DateTime
$inicio = new DateTime($iniciodeexpediente);
$fim = new DateTime($fimdeexpediente);

// Calcular a diferença de tempo
$intervaloTotal = $inicio->diff($fim);

// Encontrar o meio do expediente
$meioExpediente = clone $inicio;
$meioExpediente->add(new DateInterval('PT' . (($intervaloTotal->h * 60 + $intervaloTotal->i) / 2) . 'M'));

// Calcular o início e fim do intervalo de 15 minutos
$inicioIntervalo = clone $meioExpediente;
$fimIntervalo = clone $meioExpediente;
$inicioIntervalo->sub(new DateInterval('PT7M30S')); // Subtrai 7 minutos e 30 segundos
$fimIntervalo->add(new DateInterval('PT7M30S')); // Adiciona 7 minutos e 30 segundos

// Formatar os horários para exibição
$inicioIntervaloFormatado = $inicioIntervalo->format('H:i');
$fimIntervaloFormatado = $fimIntervalo->format('H:i');
?>





<?php

// Preparando a primeira query
$query = "INSERT INTO escala (id_usuario, horarioinicio, intervaloinicio, intervalofim, horariofim, local, dia, mes, ano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($query);

if ($stmt === false) {
    die('Erro na preparação da query: ' . $conn->error);
}

$stmt->bind_param("isssssssss", $profissional, $iniciodeexpediente, $inicioIntervaloFormatado, $fimIntervaloFormatado, $fimdeexpediente, $localdetrabalho, $escaladia, $escalames, $escalaano, $operador);

if (!$stmt->execute()) {
    die('Erro na execução da query: ' . $stmt->error);
}

$id_escala = $stmt->insert_id;


// Preparando a segunda query
$query1 = "INSERT INTO registroescala (id_escala, id_usuario, horarioinicio, intervaloinicio, intervalofim, horariofim, local, dia, mes, ano, loghorario, logdia, logsemana, logmes, logano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt1 = $conn->prepare($query1);

if ($stmt1 === false) {
    die('Erro na preparação da query1: ' . $conn->error);
}

$stmt1->bind_param("iissssssssssssss", $id_escala, $profissional, $iniciodeexpediente, $inicioIntervaloFormatado, $fimIntervaloFormatado, $fimdeexpediente, $localdetrabalho, $escaladia, $escalames, $escalaano, $horario, $dia, $semana, $mes, $ano, $operador);

if (!$stmt1->execute()) {
    die('Erro na execução da query1: ' . $stmt1->error);
}

$stmt->close();
$stmt1->close();

?> 

<?php
$nomeprofissional = $dados2['nome'];

$msg = "Escala para $nomeprofissional criada com sucesso!";
echo "<script>alert( '$msg' );; window.location = '../escala_semanal.php';</script>";                
?>




