<?php
// Inclui o arquivo 'conexao.php' que contém a conexão com o banco de dados
include 'conexao.php';

// Obtém os dados enviados pelo formulário através do método POST
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];
$tipodeusuario = $_POST['tipodeusuario'];

// Prepara a consulta SQL para inserção dos dados na tabela 'usuarios'
$sql = "INSERT INTO usuarios (nome, login, senha, telefone, email, cpf, funcao, tipodeusuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Prepara a consulta para execução
$stmt = $conn->prepare($sql);

// Associa os parâmetros recebidos do formulário à consulta preparada
// 'ssssssss' indica que todos os parâmetros são do tipo string
$stmt->bind_param("ssssssss", $nome, $login, $senha, $telefone, $email, $cpf, $funcao, $tipodeusuario);

// Executa a consulta e verifica se foi bem-sucedida
if ($stmt->execute()) {
    // Redireciona para a página 'index.html' em caso de sucesso
    header("Location: ../index.html");
    exit();
} else {
    // Em caso de erro, exibe a mensagem de erro
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a instrução preparada
$stmt->close();

// Fecha a conexão com o banco de dados
$conn->close();
?>
