<?php
// Define as informações de conexão com o banco de dados
$servername = "localhost"; // Endereço do servidor MySQL (normalmente localhost se estiver rodando localmente)
$username = "seu_usuario"; // Nome de usuário do MySQL
$password = "sua_senha"; // Senha do MySQL
$dbname = "seu_banco_de_dados"; // Nome do banco de dados que deseja se conectar

// Cria a conexão com o banco de dados utilizando o construtor mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida corretamente
if ($conn->connect_error) {
    // Se houver falha na conexão, encerra o script e mostra uma mensagem de erro
    die("Falha na conexão: " . $conn->connect_error);
}
?>
