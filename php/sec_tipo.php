<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['UsuarioID'])) {
    // Redireciona para a página de login se o usuário não estiver logado
    header("Location: login.php");
    exit;
}

// Obtém o nível do usuário da sessão
$nivel = $_SESSION['UsuarioNivel'];

// Redireciona o visitante com base no nível do usuário
if ($nivel == 1) {
    header("Location: ../home_admin.html");
    exit;
} elseif ($nivel == 2) {
    header("Location: ../home_gestor.html");
    exit;
} elseif ($nivel == 3) {
    header("Location: ../home_usuario.html");
    exit;
} else {
    // Redireciona para uma página de erro ou logout se o nível do usuário for desconhecido
    header("Location: logout.php");
    exit;
}
?>
