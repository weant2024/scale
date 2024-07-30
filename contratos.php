<?php
include "sec/config.php";

if (isset($_POST['contratos'])) {
    $ids_contratos_str = $_POST['contratos'];
    
    // Converte a string "1,2" em um array [1, 2]
    $ids_contratos = explode(',', $ids_contratos_str);
    $ids_contratos = array_map('intval', $ids_contratos); // Sanitiza os IDs
    
    // Converte o array de volta para uma string para usar na consulta SQL
    $ids_contratos_str = implode(',', $ids_contratos);

    $query_contratos = "SELECT * FROM contrato WHERE id IN ($ids_contratos_str)";
    $resultado_contratos = $conn->query($query_contratos);

    $contratosHtml = '';
    $profissionaisHtml = '';
    $profissionaisAdicionados = array(); // Array para rastrear IDs dos profissionais adicionados

    if ($resultado_contratos->num_rows > 0) {
        while ($dados_contrato = $resultado_contratos->fetch_assoc()) {
            $id_contrato = $dados_contrato['id'];

            $query_usuario_etapa_relacao_cliente = "SELECT * FROM relacao_cliente WHERE id_contrato = $id_contrato";
            $resultado_usuario_etapa_relacao_cliente = $conn->query($query_usuario_etapa_relacao_cliente);

            if ($resultado_usuario_etapa_relacao_cliente->num_rows > 0) {
                while ($dados_usuario_etapa_relacao_cliente = $resultado_usuario_etapa_relacao_cliente->fetch_assoc()) {
                    $id_usuario_dados_usuario_etapa_relacao_cliente = $dados_usuario_etapa_relacao_cliente['id_usuario'];

                    $query_profissionais = "SELECT * FROM usuario WHERE id = $id_usuario_dados_usuario_etapa_relacao_cliente";
                    $resultado_profissionais = $conn->query($query_profissionais);

                    if ($resultado_profissionais->num_rows > 0) {
                        while ($dados_profissional = $resultado_profissionais->fetch_assoc()) {
                            $id_profissional = $dados_profissional['id'];

                            // Verifica se o profissional já foi adicionado
                            if (!in_array($id_profissional, $profissionaisAdicionados)) {
                                $nome_profissional = $dados_profissional['nome'];

                                // $contratosHtml = '' . $ids_contratos_str . '';
                                // $profissionaisHtml .= '' . $id_profissional . '';

                                $profissionaisHtml .= '
                                <label class="selectgroup-item">
                                    <input
                                        type="checkbox"
                                        name="profissionais[]"
                                        value="' . $id_profissional . '"
                                        class="selectgroup-input profissionais"
                                    />
                                    <span class="selectgroup-button">' . $nome_profissional . '</span>
                                </label>
                                ';

                                // Adiciona o ID do profissional ao array de rastreamento
                                $profissionaisAdicionados[] = $id_profissional;
                            }
                        }
                    }
                }
            }
        }
    } else {
        $contratosHtml = '<p>Nenhum contrato encontrado.</p>';
    }

    echo json_encode([
        'contratosHtml' => $contratosHtml,
        'profissionaisHtml' => $profissionaisHtml
    ]);
} else {
    echo json_encode([
        'contratosHtml' => '<p>Nenhum contrato selecionado.</p>',
        'profissionaisHtml' => ''
    ]);
}
?>