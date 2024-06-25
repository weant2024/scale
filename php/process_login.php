<?php
include 'logger.php'; // Inclui a função de logging

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simulação de autenticação (usuário e senha fixos para exemplo)
    if ($username === 'admin' && $password === 'admin') {
        logMessage("Usuário $username fez login com sucesso");
        // Retorna uma resposta JSON indicando sucesso
        echo json_encode(['success' => true]);
    } else {
        logMessage("Falha na tentativa de login para o usuário $username", 'ERROR');
        // Retorna uma resposta JSON indicando falha
        echo json_encode(['success' => false]);
    }
} else {
    logMessage('Tentativa de acesso direto ao script de login', 'WARNING');
    // Retorna uma resposta JSON indicando falha
    echo json_encode(['success' => false]);
}
?>
