<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Obtém os dados do formulário via método POST
$nome = $_POST['nome']; // Obtém o valor do campo 'nome' do formulário
$telefone = $_POST['telefone']; // Obtém o valor do campo 'telefone' do formulário
$email = $_POST['email']; // Obtém o valor do campo 'email' do formulário
$cpf = $_POST['cpf']; // Obtém o valor do campo 'cpf' do formulário
$funcao = $_POST['funcao']; // Obtém o valor do campo 'funcao' do formulário
$tipodeusuario = $_POST['tipodeusuario']; // Obtém o valor do campo 'tipodeusuario' do formulário

// Prepara a instrução SQL para inserir os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, telefone, email, cpf, funcao, tipodeusuario) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql); // Prepara a instrução SQL para execução
$stmt->bind_param("ssssss", $nome, $telefone, $email, $cpf, $funcao, $tipodeusuario); // Associa os parâmetros da instrução SQL com as variáveis PHP

// Executa a instrução preparada
if ($stmt->execute()) { // Se a execução for bem-sucedida
    header("Location: ../form.html"); // Redireciona para a página 'form.html'
    exit(); // Encerra o script
} else {
    // Caso ocorra um erro na execução da instrução SQL
    echo "Erro: " . $sql . "<br>" . $conn->error; // Exibe a mensagem de erro específica
}

// Fecha o statement e a conexão com o banco de dados
$stmt->close(); // Fecha o statement preparado
$conn->close(); // Fecha a conexão com o banco de dados
?>
