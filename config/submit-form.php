<?php
include 'conexao.php';

// Obtém os dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];
$tipodeusuario = $_POST['tipodeusuario'];

// Prepara e executa a inserção no banco de dados
$sql = "INSERT INTO usuarios (nome, telefone, email, cpf, funcao, tipodeusuario) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $nome, $telefone, $email, $cpf, $funcao, $tipodeusuario);

if ($stmt->execute()) {
    header("Location: ../form.html");
    exit();
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$stmt->close();
$conn->close();
?>