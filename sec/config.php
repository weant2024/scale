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
$urllogin = "http://localhost/hml-scale/login.php";
$urlzabbix = "http://localhost/hml-scale/login.php";
$urlgrafana = "http://localhost/hml-scale/login.php";
$urlitsm = "http://localhost/hml-scale/login.php";
@$criptografada = md5($senha);
@$criptografadacpf = md5($rg);
?>