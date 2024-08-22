<?php
include "config.php"; // Inclua sua conexão com o banco de dados

// Verifica se o ID do contrato foi enviado
if (!isset($_POST['id_exibe_contratos']) || empty($_POST['id_exibe_contratos'])) {
    die("ID do contrato não fornecido.");
}

$idContrato = $conn->real_escape_string($_POST['id_exibe_contratos']);

// Consultar profissionais associados ao contrato
$query = "SELECT id_usuario FROM relacao_contrato WHERE id_contrato = '$idContrato'";
$resultado = $conn->query($query);

if (!$resultado) {
    // Verifica se houve um erro na execução da consulta
    die("Erro na consulta de profissionais: " . $conn->error);
}

$profissionais = array();

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $id_usuario = $row['id_usuario'];
        
        // Consultar nome do usuário na tabela de usuários
        $query_usuario = "SELECT nome FROM usuario WHERE id = '$id_usuario'";
        $resultado_usuario = $conn->query($query_usuario);
        
        if (!$resultado_usuario) {
            // Verifica se houve um erro na execução da consulta
            die("Erro na consulta de usuário: " . $conn->error);
        }

        if ($resultado_usuario->num_rows > 0) {
            $dados_usuario = $resultado_usuario->fetch_assoc();
            $profissionais[] = array('id' => $id_usuario, 'nome' => $dados_usuario['nome']);
        } else {
            // Se não encontrar o usuário, adicionar uma mensagem de erro
            error_log("Usuário com ID $id_usuario não encontrado na tabela 'usuario'.");
        }
    }
} else {
    // Se não houver profissionais associados ao contrato
    error_log("Nenhum profissional encontrado para o contrato com ID $idContrato.");
}

echo json_encode($profissionais);

$conn->close();
?>
