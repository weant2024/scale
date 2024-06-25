<?php
$servername = "localhost";
$username = "weant2024";
$password = "W34nt@2014!";
$dbname = "scale";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
