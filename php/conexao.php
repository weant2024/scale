<?php
// Define as informações de conexão com o banco de dados
$servername = "localhost"; // Endereço do servidor MySQL (normalmente localhost se estiver rodando localmente)
$username = "weant2024"; // Nome de usuário do MySQL
$password = "W34nt@2014!"; // Senha do MySQL
$dbname = "scale"; // Nome do banco de dados que deseja se conectar

// Cria a conexão com o banco de dados utilizando o construtor mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida corretamente
if ($conn->connect_error) {
    // Se houver falha na conexão, encerra o script e mostra uma mensagem de erro
    die("Falha na conexão: " . $conn->connect_error);
}
?>
