<?php
include "config.php"; 
header('Content-Type: application/json');

// Verificar se o ID do contrato foi enviado via POST
$id_exibe_contratos = isset($_POST['id_exibe_contratos']) ? $_POST['id_exibe_contratos'] : '';

// Verificar se o ID do contrato é válido
if ($id_exibe_contratos) {
    // Coletar locais de trabalho com base no contrato selecionado
    $query_coleta_local = "SELECT id_local FROM relacao_contrato WHERE id_contrato = '$id_exibe_contratos'";
    $resultado_coleta_local = $conn->query($query_coleta_local);

    $locais = [];

    if ($resultado_coleta_local && $resultado_coleta_local->num_rows > 0) {
        while ($dados_coleta_local = $resultado_coleta_local->fetch_assoc()) {
            $id_coleta_local = $dados_coleta_local['id_local'];
            
            // Exibir locais de trabalho
            $query_exibe_local = "SELECT * FROM local WHERE id = '$id_coleta_local'";
            $resultado_exibe_local = $conn->query($query_exibe_local);
            $dados_exibe_local = $resultado_exibe_local->fetch_assoc();
            $id_exibe_local = $dados_exibe_local['id'];
            $nome_exibe_local = $dados_exibe_local['nome'];

            $locais[] = [
                'id' => $id_exibe_local,
                'nome' => $nome_exibe_local
            ];
        }
    }

    echo json_encode($locais);
} else {
    echo json_encode([]);
}
?>
