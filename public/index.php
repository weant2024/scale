<?php
// Inicia a sessão e destrói qualquer sessão existente para fins ilustrativos
session_start();
session_destroy(); // Apenas para fins ilustrativos, destrói a sessão existente

// Inclui configuração e outros arquivos necessários
include "../php/conexão.php"; // Aqui você pode inicializar configurações, como conexão com o banco de dados
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEANT - Desenvolvimento Digital</title>
    <link rel="icon" href="../imagens/favicon.ico" type="image/x-icon">
    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="../css/styles_index.css">
</head>
<body>
    <!-- Container para renderização do SPA -->
    <div id="app"></div>

    <!-- Arquivos de scripts -->
    <!-- Importa as bibliotecas React e ReactDOM -->
    <script src="https://cdn.jsdelivr.net/npm/react/umd/react.production.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/react-dom/umd/react-dom.production.min.js"></script>
    <!-- Importa Babel para poder usar JSX no navegador -->
    <script src="https://cdn.jsdelivr.net/npm/@babel/standalone/babel.min.js"></script>
    <!-- Arquivo JavaScript principal do SPA -->
    <script src="../js/app.js" type="text/babel"></script>
</body>
</html>
