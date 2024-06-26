<?php
include "conexao.php";

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: ../index.php"); exit;
}

$nivel = $_SESSION['UsuarioNivel']; 

  // Redireciona o visitante
  if ( $nivel == 1 )
  {
  header("Location: ../home_administrador.html"); exit;
  }
  elseif ( $nivel == 2 )
  {
  header("Location: ../home_gestor.html"); exit;
  }
  elseif ( $nivel == 3 )
  {
  header("Location: ../home_usuario.html"); exit;
  }
  
  ?>