<?php
include "config.php";
include "sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sec_tipo.php"); exit;
}

$login = $_POST["login"];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
    $enviarnascimento = explode("-", $nascimento);

    // Pega o ano, mês e dia
    $enviaanonascimento = $enviarnascimento[0];
    $enviamesnascimento = $enviarnascimento[1];
    $enviadianascimento = $enviarnascimento[2];

    // Monta a data no formato DD/MM/AAAA
    $enviaaniversario = "$enviadianascimento/$enviamesnascimento/$enviaanonascimento";


$genero = $_POST['genero'];
$email = $_POST['email'];
$telefone = $_POST['celular'];
#$cargousuario = $_POST["cargousuario"];
#$departamentousuario = $_POST["departamentousuario"];
$nivelusuario = $_POST["nivelusuario"];
$ativousuario = $_POST["ativousuario"];
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
// // Função para verificar se uma variável está definida e não é vazia
// function verificarVariavel($var, $nomeVar) {
//     if (!isset($var) || empty($var)) {
//         die("Por favor, preencha o campo obrigatório: $nomeVar.");
//     }
// }

// // Verificando se todas as variáveis necessárias estão definidas e não são vazias
// verificarVariavel($login, 'login');
// verificarVariavel($nome, 'nome');
// verificarVariavel($cpf, 'cpf');
// verificarVariavel($nascimento, 'nascimento');
// verificarVariavel($genero, 'genero');
// verificarVariavel($email, 'email');
// verificarVariavel($telefone, 'telefone');
// verificarVariavel($nivelusuario, 'nivel');
// verificarVariavel($pnivel, 'pnivel');
// verificarVariavel($ativousuario, 'ativo');
// verificarVariavel($pativo, 'pativo');
// verificarVariavel($gerasenha, 'gerasenha');
// verificarVariavel($horario, 'horario');
// verificarVariavel($dia, 'dia');
// verificarVariavel($semana, 'semana');
// verificarVariavel($mes, 'mes');
// verificarVariavel($ano, 'ano');
// verificarVariavel($operador, 'operador');

// Preparando a primeira query
$query = "INSERT INTO usuario (login, senha, nome, cpf, nascimento, genero, email, telefone, departamento, cargo, nivel, pnivel, ativo, pativo, gerasenha, horario, dia, semana, mes, ano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($query);

if ($stmt === false) {
    die('Erro na preparação da query: ' . $conn->error);
}

$stmt->bind_param("sssssssssssssssssssss", $login, $cpf, $nome, $cpf, $nascimento, $genero, $email, $telefone, $departamento, $cargo, $nivelusuario, $pnivel, $ativousuario, $pativo, $gerasenha, $horario, $dia, $semana, $mes, $ano, $operador);

if (!$stmt->execute()) {
    die('Erro na execução da query: ' . $stmt->error);
}

$idusuario = $stmt->insert_id;

// Preparando a segunda query
$query1 = "INSERT INTO registrousuario (id_usuario, login, senha, nome, cpf, nascimento, genero, email, telefone, departamento, cargo, nivel, pnivel, ativo, pativo, gerasenha, horario, dia, semana, mes, ano, operador) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt1 = $conn->prepare($query1);

if ($stmt1 === false) {
    die('Erro na preparação da query1: ' . $conn->error);
}

$stmt1->bind_param("isssssssssssssssssssss", $idusuario, $login, $criptografadacpf, $nome, $cpf, $nascimento, $genero, $email, $telefone, $departamento, $cargo, $nivelusuario, $pnivel, $ativousuario, $pativo, $gerasenha, $horario, $dia, $semana, $mes, $ano, $operador);

if (!$stmt1->execute()) {
    die('Erro na execução da query1: ' . $stmt1->error);
}

$stmt->close();
$stmt1->close();

$msg = "Usuário cadastrado com sucesso!";
echo "<script>alert('$msg'); window.location = '../criarusuario.php';</script>";
?>





