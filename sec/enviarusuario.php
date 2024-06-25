<?php
include "config.php";
include "sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sec_tipo.php"); exit;
}


#$id = $_POST["id"];
$login = $_POST["login"];
#$senha = $_POST["senha"];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$rgorgao = $_POST['rgorgao'];
$rguf = $_POST['rguf'];
#$matricula = $_POST["matricula"];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
#$cargousuario = $_POST["cargousuario"];
#$departamentousuario = $_POST["departamentousuario"];
$nivelusuario = $_POST["nivelusuario"];
#$pnivel = $_POST["pnivel"];
$ativousuario = $_POST["ativousuario"];
#$pativo = $_POST["pativo"];
$gerasenha = "3";

$horario = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$semana = date('w');
$operador = $_SESSION["UsuarioLogin"];



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
if ($nivelusuario == 3){
    $pnivel = 'Administrador';
}
elseif  ($nivelusuario == 2){
    $pnivel = 'Tecnico';
}
elseif  ($nivelusuario == 1){
    $pnivel = 'Usuario';
}
?>
<?php
if ($ativousuario == 1){
    $pativo = 'Ativado';
}
elseif  ($ativousuario == 0){
    $pativo = 'Desativado';
}
?>

<?php
// Supondo que a conexão com o banco de dados está em $conn

// Preparando a primeira query
$query = "INSERT INTO usuario (login, senha, nome, rg, rgorgao, rguf, matricula, email, telefone, departamento, cargo, nivel, pnivel, ativo, pativo, gerasenha, horario, dia, semana, mes, ano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($query);

if ($stmt === false) {
    die('Erro na preparação da query: ' . $conn->error);
}

$stmt->bind_param("ssssssssssssssssssssss", $login, $rg, $nome, $rg, $rgorgao, $rguf, $matricula, $email, $telefone, $departamentousuario, $cargousuario, $nivelusuario, $pnivel, $ativousuario, $pativo, $gerasenha, $horario, $dia, $semana, $mes, $ano, $operador);

if (!$stmt->execute()) {
    die('Erro na execução da query: ' . $stmt->error);
}

$idusuario = $stmt->insert_id;


// Preparando a segunda query
$query1 = "INSERT INTO registrousuario (id_usuario, login, senha, nome, rg, rgorgao, rguf, matricula, email, telefone, departamento, cargo, nivel, pnivel, ativo, pativo, gerasenha, horario, dia, semana, mes, ano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt1 = $conn->prepare($query1);

if ($stmt1 === false) {
    die('Erro na preparação da query1: ' . $conn->error);
}

$stmt1->bind_param("issssssssssssssssssssss", $idusuario, $login, $criptografadarg, $nome, $rg, $rgorgao, $rguf, $matricula, $email, $telefone, $departamentousuario, $cargousuario, $nivelusuario, $pnivel, $ativousuario, $pativo, $gerasenha, $horario, $dia, $semana, $mes, $ano, $operador);

if (!$stmt1->execute()) {
    die('Erro na execução da query1: ' . $stmt1->error);
}

$stmt->close();
$stmt1->close();

$msg = "Usuário cadastrado com sucesso!";
echo "<script>alert( '$msg' );; window.location = '../usuario/inicialusuario.php';</script>";
?>




