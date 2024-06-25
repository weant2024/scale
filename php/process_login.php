<?php
include 'logger.php'; // Inclui a função de logging

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simulação de autenticação (usuário e senha fixos para exemplo)
    if ($username === 'admin' && $password === 'admin') {
        logMessage("Usuário $username fez login com sucesso");
        // Redirecionar para o dashboard após login bem-sucedido
        header('Location: dashboard.html');
        exit;
    } else {
        logMessage("Falha na tentativa de login para o usuário $username", 'ERROR');
        // Redirecionar de volta ao login com uma mensagem de erro
        header('Location: index.html?error=1');
        exit;
    }
} else {
    logMessage('Tentativa de acesso direto ao script de login', 'WARNING');
    // Redirecionar de volta ao login
    header('Location: index.html');
    exit;
}
?>
