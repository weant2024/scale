<?php
function logMessage($message, $level = 'INFO') {
    $logDirectory = 'logs';
    if (!is_dir($logDirectory)) {
        mkdir($logDirectory, 0755, true); // Cria a pasta de logs se não existir
    }
    
    $logFile = $logDirectory . '/app.log'; // Define o arquivo de log
    $timestamp = date('Y-m-d H:i:s'); // Obtém o timestamp atual
    $logMessage = "[$timestamp] [$level] $message" . PHP_EOL; // Formata a mensagem de log
    
    file_put_contents($logFile, $logMessage, FILE_APPEND); // Escreve a mensagem no arquivo de log
}
?>
