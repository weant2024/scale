<?php
$local = "localhost";
$usuario = "weant2024";
$senha = "W34nt@2024!";
$banco = "scale";
$conn = new mysqli($local, $usuario, $senha, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro ao conectar com o banco de dados: " . $conn->connect_error);
}
?>

<?php
@$criptografada = md5($senha);
@$criptografadarg = md5($rg);
?>