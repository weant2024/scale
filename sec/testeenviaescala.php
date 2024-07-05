<?php
include "config.php";
include "sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sec_tipo.php"); exit;
}

$idusuario = $_GET['id'];
$horarioexpediente = $_GET['hexp'];
$localdetrabalho = $_GET['local'];
$horario = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$semana = date('w');
$operador = $_SESSION["UsuarioLogin"];

switch ($horarioexpediente) {
    case "01-07":
        $inicioexpediente = "01:00:00";
        $iniciointervalo = "04:00:00";
        $finalintervalo = "04:15:00";
        $finalexpediente = "07:00:00";
        break;
    case "07-13":
        $inicioexpediente = "07:00:00";
        $iniciointervalo = "10:00:00";
        $finalintervalo = "10:15:00";
        $finalexpediente = "13:00:00";
        break;
    case "13-19":
        $inicioexpediente = "13:00:00";
        $iniciointervalo = "16:00:00";
        $finalintervalo = "16:15:00";
        $finalexpediente = "19:00:00";
        break;
    case "19-01":
        $inicioexpediente = "19:00:00";
        $iniciointervalo = "21:00:00";
        $finalintervalo = "21:15:00";
        $finalexpediente = "01:00:00";
        break;
    default:
        // Caso nenhum dos valores seja correspondido
        // Defina um comportamento padrão aqui, se necessário
        break;
}

switch ($mes){

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

// Verifica se as datas foram passadas na URL
if (isset($_GET['dates'])) {
    // Sanitiza e obtém as datas
    $datesStr = htmlspecialchars($_GET['dates']);
    $dates = explode(',', $datesStr);
    // Separar a data usando o delimitador "-"

    foreach ($dates as $date) {
        $allItems = array();
                        
        // Tenta separar cada data usando '-' como delimitador
        $separatedData = explode('-', $date);

        //Verifica se a data está no formato correto (dia-mes-ano)
        if (count($separatedData) == 3) {
            $escaladia = $separatedData[0];
            $escalames = $separatedData[1];
            $escalaano = $separatedData[2];            
                
            // Adiciona os itens separados ao array $allItems
            $allItems[] = array('dia' => $escaladia, 'mes' => $escalames, 'ano' => $escalaano);

            $dataescala = "$escaladia-$escalames";  
            $dataescalacompleta = "$escaladia/$escalames/$escalaano";      
            $dataescalatratada = "$escalaano-$escalames-$escaladia";  
            
            echo "</br><b>Data: </b>$dataescalacompleta </br>";
            echo "<b>Início de expediente:</b> $inicioexpediente</br>";
            echo "<b>Início de intervalo:</b> $iniciointervalo</br>";
            echo "<b>Final de intervalo:</b> $finalintervalo</br>";
            echo "<b>Final de expediente:</b> $finalexpediente</br>"; 
            echo "$idusuario</br>";
            echo "$localdetrabalho</br></br>";

?>


 <?php

//Preparando a primeira query
$query = "INSERT INTO escala (id_usuario, horarioinicio, intervaloinicio, intervalofim, horariofim, local, dia, mes, ano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($query);

if ($stmt === false) {
    die('Erro na preparação da query: ' . $conn->error);
}

$stmt->bind_param("isssssssss", $idusuario, $inicioexpediente, $iniciointervalo, $finalintervalo, $finalexpediente, $localdetrabalho, $escaladia, $escalames, $escalaano, $operador);

if (!$stmt->execute()) {
    die('Erro na execução da query: ' . $stmt->error);
}



//Preparando a segunda query
$query1 = "INSERT INTO registroescala (id_usuario, horarioinicio, intervaloinicio, intervalofim, horariofim, local, dia, mes, ano, loghorario, logdia, logsemana, logmes, logano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt1 = $conn->prepare($query1);

if ($stmt1 === false) {
    die('Erro na preparação da query1: ' . $conn->error);
}

$stmt1->bind_param("issssssssssssss", $idusuario, $inicioexpediente, $iniciointervalo, $finalintervalo, $finalexpediente, $localdetrabalho, $escaladia, $escalames, $escalaano, $horario, $dia, $semana, $mes, $ano, $operador);

if (!$stmt1->execute()) {
    die('Erro na execução da query1: ' . $stmt1->error);
}

$stmt->close();
$stmt1->close();

$msg = "Escala para cadastrada com sucesso!";
echo "<script>alert( '$msg' );; window.location = '../teste.php';</script>";

        }        

}
}
?> 


