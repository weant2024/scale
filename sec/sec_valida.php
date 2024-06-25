<?php

include "config.php";

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
  header("Location: ../login/login.php"); exit;
}

$usuario = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
    
// Validação do usuário/senha digitados
$sql = "SELECT `id`, `login`, `nivel` FROM `usuario` WHERE (`login` = '". $usuario ."') AND (`senha` = '". ($senha) ."') AND (`ativo` = 1) LIMIT 1";
$query = $conn->query($sql);


if ($query->num_rows != 1) {
  // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
  header("Location: ../login/login_invalido.php"); exit;
} else {
  // Salva os dados encontados na variável $resultado
  $resultado = $query->fetch_assoc();
}
  // Se a sessão não existir, inicia uma
  if (!isset($_SESSION)) session_start();

  // Salva os dados encontrados na sessão
  $_SESSION['UsuarioID'] = $resultado['id'];
  $_SESSION['UsuarioLogin'] = $resultado['login'];
  $_SESSION['UsuarioNivel'] = $resultado['nivel'];
  $_SESSION['UsuarioNome'] = $resultado['nome'];

$nivel = $_SESSION['UsuarioNivel']; 

  // Redireciona o visitante
  header("Location: sec_tipo.php"); exit;
?>

