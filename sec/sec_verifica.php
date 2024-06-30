<?php
include "config.php";

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
  header("Location: ../index.php"); exit;
    
if ($dias < 1){
  header ("Location: ../sec/pagamento.php"); exit;
}
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: ../login.php"); exit;
}

 $nivel = $_SESSION['UsuarioNivel'];
 
 
$sqlc = "SELECT * FROM usuario WHERE id=" . $_SESSION['UsuarioID']; //faz a busca com as palavras enviadas
$query = $conn->query($sqlc);
$dados = $query->fetch_assoc();

$idlogado = $dados['id'];
$usuariologado = $dados['login'];
$nomelogado = $dados['nome'];
$cpflogado = $dados['cpf'];
$emaillogado = $dados['email'];
$telefonelogado = $dados['telefone'];
$departamentologado = $dados['departamento'];
$cargologado = $dados['cargo'];


?>
