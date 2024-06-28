<?php
mysqli_close;
include "config.php"; 
include "info.php";

$serialcliente = $_GET['serialcliente'];

switch ($semana) {

case 0: $semana = "Domingo"; break;
case 1: $semana = "Segunda"; break;
case 2: $semana = "Terça"; break;
case 3: $semana = "Quarta"; break;
case 4: $semana = "Quinta"; break;
case 5: $semana = "Sexta"; break;
case 6: $semana = "Sábado"; break;

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

mysqli_close;
?>

<?php
$local = "alohatiegt.mysql.uhserver.com";
$usuario = "natoegt";
$senha = "N@t0l1vr31";
$selecione = "alohatiegt";
$db = mysql_connect( $local, $usuario, $senha) or die (mysqli_error());
mysql_select_db( $selecione , $db ) or die ("Erro ao conectar com o banco de dados");

$sqlc5 = mysql_query("SELECT * FROM pagamento WHERE reserva='contratos'")or die(mysql_error()); //faz a busca com as palavras enviadas
$dados5 = mysql_fetch_assoc($sqlc5);
$valor = $dados5['valor'];
$diasativo = $dados5['diasativo'] + 1;
$horario = $dados5['horario'];
$dia = $dados5['dia'];
$semana = $dados5['semana'];
$mes = $dados5['mes'];
$ano = $dados5['ano'];
$statuspagamento = 'ocupado';

$horariopag = date('H:i:s');
$diapag = date('d');
$semanapag = date('w');
$mespag = date('m');
$anopag = date('Y');


switch ($semanapag) {

case 0: $semanapag = "Domingo"; break;
case 1: $semanapag = "Segunda"; break;
case 2: $semanapag = "Terça"; break;
case 3: $semanapag = "Quarta"; break;
case 4: $semanapag = "Quinta"; break;
case 5: $semanapag = "Sexta"; break;
case 6: $semanapag = "Sábado"; break;

}

switch ($mespag){

case 1: $mespag = "Janeiro"; break;
case 2: $mespag = "Fevereiro"; break;
case 3: $mespag = "Março"; break;
case 4: $mespag = "Abril"; break;
case 5: $mespag = "Maio"; break;
case 6: $mespag = "Junho"; break;
case 7: $mespag = "Julho"; break;
case 8: $mespag = "Agosto"; break;
case 9: $mespag = "Setembro"; break;
case 10: $mespag = "Outubro"; break;
case 11: $mespag = "Novembro"; break;
case 12: $mespag = "Dezembro"; break;

}


$query4 = "INSERT INTO registropagamento ( `idpag` , `reserva` , `serial` , `status` , `nome` , `valor` , `diasativo` , `horario` , `dia` , `semana` , `mes` , `ano` , `ip` , `navegador` , `so` ) VALUES ( '2', 'contratos', '$serialcliente', '$statuspagamento', 'Contratos', '$valor', '$diasativo', '$horariopag', '$diapag', '$semanapag', '$mespag' , '$anopag' , '$ip' , '$navegador' , '$so' )";
mysql_query($query4, $db) OR DIE(mysql_error());

$query = "UPDATE pagamento SET status='$statuspagamento' WHERE id='2'";
mysql_query($query,$db);

mysqli_close;
?>

<?php
include "config.php"; 

$query2 = "UPDATE pagamento SET serial='$serialcliente', diasativo='$diasativo', horario='$horario', dia='$dia', semana='$semana', mes='$mes', ano='$ano' WHERE id='1'";
mysql_query($query2,$db);

header( "Location: ../loginativo.php" );
?>


