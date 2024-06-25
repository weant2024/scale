<?php
include "config.php";

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: ../login/login.php"); exit;
}

$nivel = $_SESSION['UsuarioNivel']; 

  // Redireciona o visitante
  if ( $nivel == 1 )
  {
  header("Location: ../inicial_1.php"); exit;
  }
  elseif ( $nivel == 2 )
  {
  header("Location: ../inicial_2.php"); exit;
  }
  elseif ( $nivel == 3 )
  {
  header("Location: ../inicial_3.php"); exit;
  }
  
  ?>