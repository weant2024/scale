<?php
$local = "localhost";
$userdb = "weant2024";
$passdb = "W34nt@2024!";
$banco = "scale";
$conn = new mysqli($local, $userdb, $passdb, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro ao conectar com o banco de dados: " . $conn->connect_error);
}
?>

<?php
$urllogin = "http://3.21.89.6/login.php";
$urlzabbix = "http://3.21.89.6/login.php";
$urlgrafana = "http://3.21.89.6/login.php";
$urlitsm = "http://3.21.89.6/login.php";
@$criptografada = md5($senha);
@$criptografadacpf = md5($rg);
?>