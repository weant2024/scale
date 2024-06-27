<?php
include 'conexao.php';

// Obtém os dados do formulário
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];
$tipodeusuario = $_POST['tipodeusuario'];

// Prepara e executa a inserção no banco de dados
$sql = "INSERT INTO usuarios (nome, login, senha, telefone, email, cpf, funcao, tipodeusuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $nome, $login, $senha, $telefone, $email, $cpf, $funcao, $tipodeusuario);

if ($stmt->execute()) {
    header("Location: ../index.html");
    exit();
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$stmt->close();
$conn->close();
?>