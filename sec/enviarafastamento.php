<?php
include "config.php";
include "sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sec_tipo.php"); exit;
}
$id_usuario_selecionado = $_POST['nome'];
$motivo = $_POST["motivo"];
$datainicial = $_POST['datainicial'];
    $enviardatainicial = explode("-", $datainicial);

    // Pega o ano, mês e dia
    $enviaanodatainicial = $enviardatainicial[0];
    $enviamesdatainicial = $enviardatainicial[1];
    $enviadiadatainicial = $enviardatainicial[2];

    // Monta a data no formato DD/MM/AAAA
    $enviardatainicialtratado = "$enviadiadatainicial/$enviamesdatainicial/$enviaanodatainicial";

$datafinal = $_POST['datafinal'];
    $enviardatafinal = explode("-", $datafinal);

    // Pega o ano, mês e dia
    $enviaanodatafinal = $enviardatafinal[0];
    $enviamesdatafinal = $enviardatafinal[1];
    $enviadiadatafinal = $enviardatafinal[2];

    // Monta a data no formato DD/MM/AAAA
    $enviardatafinaltratado = "$enviadiadatafinal/$enviamesdatafinal/$enviaanodatafinal";

// Cria objetos DateTime para as datas inicial e final
$dataInicialObj = new DateTime($datainicial);
$dataFinalObj = new DateTime($datafinal);

// Cria um intervalo de 1 dia
$intervalo = new DateInterval('P1D');

// Cria um período de datas baseado nas datas inicial e final
$periodo = new DatePeriod($dataInicialObj, $intervalo, $dataFinalObj->modify('+1 day'));

// Itera sobre o período e pega os dias no intervalo
$diasNoIntervalo = [];
foreach ($periodo as $data) {
    $diasNoIntervalo[] = $data->format('d/m/Y');
}

$horario = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$semana = date('w');
$operador = $_SESSION["UsuarioLogin"];



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
?>

<?php
// // Exibe os dias no intervalo
// foreach ($diasNoIntervalo as $dia) {
//     echo $dia . "<br>";
//      // Separar o dia, o mês e o ano
//      list($diaSeparado, $mesSeparado, $anoSeparado) = explode('/', $dia);
    
//      // Exibe o dia, o mês e o ano separados
//      echo "Dia: " . $diaSeparado . "<br>";
//      echo "Mês: " . $mesSeparado . "<br>";
//      echo "Ano: " . $anoSeparado . "<br><br>";
// }
?>


<?php
// Supondo que a conexão com o banco de dados está em $conn

// Preparando a primeira query
$query = "INSERT INTO afastamento (id_usuario, motivo, datainicial, datafinal) 
VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($query);

if ($stmt === false) {
    die('Erro na preparação da query: ' . $conn->error);
}

$stmt->bind_param("isss", $id_usuario_selecionado, $motivo, $enviardatainicialtratado, $enviardatafinaltratado);

if (!$stmt->execute()) {
    die('Erro na execução da query: ' . $stmt->error);
}

$id_afastamento = $stmt->insert_id;


// Preparando a segunda query
$query1 = "INSERT INTO registroafastamento (id_afastamento, id_usuario, motivo, datanicial, datafinal, loghorario, logdia, logsemana, logmes, logano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt1 = $conn->prepare($query1);

if ($stmt1 === false) {
    die('Erro na preparação da query1: ' . $conn->error);
}

$stmt1->bind_param("iisssssssss", $id_afastamento, $id_usuario_selecionado, $motivo, $enviardatainicialtratado, $enviardatafinaltratado, $horario, $dia, $semana, $mes, $ano, $operador);

if (!$stmt1->execute()) {
    die('Erro na execução da query1: ' . $stmt1->error);
}
?>



<?php
// Exibe os dias no intervalo
foreach ($diasNoIntervalo as $dia) {
    // Separar o dia, o mês e o ano
    list($diaSeparado, $mesSeparado, $anoSeparado) = explode('/', $dia);  
    $null_campos = "afastado";

        // Preparando a primeira de escala
        $query = "INSERT INTO escala (id_usuario, id_afastamento, id_contrato, id_local, horarioinicio, intervaloinicio, intervalofim, horariofim, dia, mes, ano, operador) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($query);

        if ($stmt === false) {
            die('Erro na preparação da query: ' . $conn->error);
        }

        $stmt->bind_param("iissssssssss", $id_usuario_selecionado, $id_afastamento, $null_campos, $null_campos, $null_campos, $null_campos, $null_campos, $null_campos, $diaSeparado, $mesSeparado, $anoSeparado, $operador);

        if (!$stmt->execute()) {
            die('Erro na execução da query: ' . $stmt->error);
        }

        $id_escala = $stmt->insert_id;


        // Preparando a segunda query
        $query1 = "INSERT INTO registroescala (id_escala, id_usuario, id_afastamento, id_contrato, id_local, horarioinicio, intervaloinicio, intervalofim, horariofim, dia, mes, ano, loghorario, logdia, logsemana, logmes, logano, operador) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt1 = $conn->prepare($query1);

        if ($stmt1 === false) {
            die('Erro na preparação da query1: ' . $conn->error);
        }

        $stmt1->bind_param("iiisssssssssssssss", $id_escala, $id_usuario_selecionado, $id_afastamento, $null_campos, $null_campos, $null_campos, $null_campos, $null_campos, $null_campos, $diaSeparado, $mesSeparado, $anoSeparado, $horario, $dia, $semana, $mes, $ano, $operador);

        if (!$stmt1->execute()) {
            die('Erro na execução da query1: ' . $stmt1->error);
        }

}

$stmt->close();
$stmt1->close();


$msg = "Afastamento registrado com sucesso!";
echo "<script>alert( '$msg' );; window.location = '../criarafastamentousuario.php';</script>";
?>




