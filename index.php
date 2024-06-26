<?php
  session_start(); // Inicia a sessão
  session_destroy(); // Destrói a sessão limpando todos os valores salvos
  include "php/config.php"; 
  include "php/data.php"; 

  if ($dias < 1){
    header("Location: php/pagamento.php");
    exit;
  }

  // Verifica se há um parâmetro de erro na URL e define a mensagem de erro
  $error = isset($_GET['error']) ? 'Usuário ou senha incorretos' : '';
  // Inclui o template HTML
  include 'template.html';
?>
