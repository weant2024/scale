<?php
include "config.php";
include "sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: ../sem_acesso.php"); exit;
}
?>

<?php
$id = $_GET["id"];

$sqlc = "SELECT * FROM usuario WHERE id='$id'"; //faz a busca com as palavras enviadas
$query = $conn->query($sqlc);
$dados = $query->fetch_assoc();
$nivelusuario = $dados["nivel"];

$login = $_POST["login"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$nascimento = $_POST["nascimento"];
$matricula = $_POST["matricula"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$cargousuario = $_POST["cargousuario"];
$departamentousuario = $_POST["departamentousuario"];

$pnivel = $_POST["pnivel"];
$ativousuario = $_POST["ativousuario"];
$pativo = $_POST["pativo"];
$gerasenha = "4";
$horario = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$semana = date('w');
$operador = $_SESSION['UsuarioLogin'];



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
    $pnivel = 'Gestor';
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
$query1 = "INSERT INTO registrousuario ( `id_usuario` , `login` , `senha` , `nome` , `cpf` , `nascimento`, `email` , `telefone` , `departamento` , `cargo` , `nivel` , `pnivel` , `ativo` , `pativo` , `gerasenha` , `horario` , `dia` , `semana` , `mes` , `ano` , `operador` ) VALUES ( '$id', '$login', '$criptografada', '$nome', '$cpf', '$nascimento', '$email', '$telefone', '$departamentousuario', '$cargousuario', '$nivelusuario', '$pnivel', '$ativousuario', '$pativo', '$gerasenha', '$horario', '$dia', '$semana', '$mes', '$ano', '$operador' )";
$result1 = $conn->query($query1);

$query2 = "UPDATE usuario SET login='$login', nome='$nome', cpf='$cpf', nascimento='$nascimento', email='$email', telefone='$telefone', departamento='$departamentousuario', cargo='$cargousuario', nivel='$nivelusuario', pnivel='$pnivel', ativo='$ativousuario', pativo='$pativo', gerasenha='$gerasenha' WHERE id='$id'"; 
$result2 = $conn->query($query2);

$msg = "Alteração do usuário realizado com sucesso!";
echo "<script>alert( '$msg ' );; window.location = '../pesquisarusuario.php';</script>";
?>



