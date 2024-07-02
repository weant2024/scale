<?php
include "config.php";
include "sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sec_tipo.php"); exit;
}


$idusuario = $_POST['nome'];
$horarioexpediente = $_POST['horarioexpediente'];
$local = $_POST['local'];
#$cargousuario = $_POST["cargousuario"];
#$departamentousuario = $_POST["departamentousuario"];

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

?>

<?php
// Verifica se as datas foram passadas na URL
if (isset($_GET['dates'])) {
    // Sanitiza e obtém as datas
    $datesStr = htmlspecialchars($_GET['dates']);
    $dates = explode(',', $datesStr);
    $totalDates = count($dates);

    // Exibe as datas selecionadas
    echo "<h1>Datas Selecionadas:</h1>";
    $allItems = array();

    // Exemplo de loop com $dates
    foreach ($dates as $date) {
        echo "$date</br>"; // Exibe cada data dentro de parágrafos
        
        // Tenta separar cada data usando '-' como delimitador
        $separatedData = explode('-', $date);
        
        //Verifica se a data está no formato correto (dia-mes-ano)
        if (count($separatedData) == $totalDates) {
            $escaladia = $separatedData[0];
            $escalames = $separatedData[1];
            $escalaano = $separatedData[2];
            // Verifica e atribui os elementos adicionais, se existirem
                
            // Adiciona os itens separados ao array $allItems
            $allItems[] = array('dia' => $escaladia, 'mes' => $escalames, 'ano' => $escalaano);
            echo "Dia $escaladia </br>";
            echo "Mês $escalames </br>";
            echo "Ano $escalaano </br></br>";
            echo "$inicioexpediente";

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
            
        } else {
            $msgerro = "Formato de data inválido: $date<br>";            
            echo "<script>alert( '$msg' );; window.location = '../criarescala.php';</script>";
        }        
    }
    
    
}
?>    

