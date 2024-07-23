<?php
include "config.php";
include "sec_verifica.php";
if ($nivel < 2) {
    header("Location: ../sem_acesso.php");
    exit;
}
?>

<?php
$id = $_GET["id"];

$nome_contrato_atualizado = $_POST["nome"];
$status_contrato_atualizado = $_POST["statuscontrato"];

$horario = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$semana = date('w');
$operador = $_SESSION['UsuarioLogin'];

switch ($mes){
case 1: $mes = "Janeiro"; break;
case 2: $mes = "Fevereiro"; break;
case 3: $mes = "Março"; break;
case 4: $mes = "Abril"; break;
case 5: $mes = "Maio"; break;
case 6: $mes = "Junho"; break;
case 7: $mes = "Julho"; break;
case 8: $mes = "Agosto"; break;
case 9: $mes = "Setembro"; break;
case 10: $mes = "Outubro"; break;
case 11: $mes = "Novembro"; break;
case 12: $mes = "Dezembro"; break;
}

switch ($semana) {
case 0: $semana = "Domingo"; break;
case 1: $semana = "Segunda"; break;
case 2: $semana = "Terça"; break;
case 3: $semana = "Quarta"; break;
case 4: $semana = "Quinta"; break;
case 5: $semana = "Sexta"; break;
case 6: $semana = "Sábado"; break;
}
?>

<?php
$query_update_contrato = "UPDATE contrato SET nome='$nome_contrato_atualizado', status='$status_contrato_atualizado' WHERE id='$id'";
$resultado_update_contrato = $conn->query($query_update_contrato);

$query_validacao_licenca = "SELECT * FROM licenca WHERE id_usuario = '$idlogado'";
$resultado_validacao_licenca = $conn->query($query_validacao_licenca);
$dados_validacao_licenca = $resultado_validacao_licenca->fetch_assoc();
$id_cliente_validacao_licenca = $dados_validacao_licenca['id_cliente'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $profissionais = isset($_POST['profissionais']) ? $_POST['profissionais'] : [];

    $query_delete_ricc = "DELETE FROM relacao_cliente WHERE id_contrato = $id";
    $resultado_delete_ricc = $conn->query($query_delete_ricc);

    foreach ($profissionais as $profissional) {
        $profissionalLimpo = htmlspecialchars(trim($profissional));

        $query_ricc = "INSERT INTO relacao_cliente (id_cliente, id_contrato, id_usuario)
                       SELECT ?, ?, ?
                       FROM DUAL
                       WHERE NOT EXISTS (
                           SELECT 1
                           FROM relacao_cliente
                           WHERE id_cliente = ?
                           AND id_contrato = ?
                           AND id_usuario = ?
                       )";

        $stmt_ricc = $conn->prepare($query_ricc);

        if ($stmt_ricc === false) {
            die('Erro na preparação da query: ' . $conn->error);
        }

        $stmt_ricc->bind_param("iiiiii", $id_cliente_validacao_licenca, $id, $profissionalLimpo, $id_cliente_validacao_licenca, $id, $profissionalLimpo);

        if (!$stmt_ricc->execute()) {
            die('Erro na execução da query: ' . $stmt_ricc->error);
        }
    }

    $locais = isset($_POST['locais']) ? $_POST['locais'] : [];

    $query_delete_rcl = "DELETE FROM relacao_contrato WHERE id_contrato = $id";
    $resultado_delete_rcl = $conn->query($query_delete_rcl);

    foreach ($locais as $local) {
        $localLimpo = htmlspecialchars(trim($local));

        // Se o local for novo, insere na tabela de locais com id_contrato
        if (strpos($localLimpo, 'novo_') === 0) {
            $nome_local_novo = substr($localLimpo, 5); // Remove o prefixo "novo_"
            $query_insert_local = "INSERT INTO local (nome, id_contrato) VALUES (?, ?)";
            $stmt_local = $conn->prepare($query_insert_local);

            if ($stmt_local === false) {
                die('Erro na preparação da query: ' . $conn->error);
            }

            $stmt_local->bind_param("si", $nome_local_novo, $id);

            if (!$stmt_local->execute()) {
                die('Erro na execução da query: ' . $stmt_local->error);
            }

            // Obtém o ID do novo local inserido
            $localLimpo = $conn->insert_id;
        }

        $query_rcl = "INSERT INTO relacao_contrato (id_cliente, id_contrato, id_local)
                      SELECT ?, ?, ?
                      FROM DUAL
                      WHERE NOT EXISTS (
                          SELECT 1
                          FROM relacao_contrato
                          WHERE id_cliente = ?
                          AND id_contrato = ?
                          AND id_local = ?
                      )";

        $stmt_rcl = $conn->prepare($query_rcl);

        if ($stmt_rcl === false) {
            die('Erro na preparação da query: ' . $conn->error);
        }

        $stmt_rcl->bind_param("iiiiii", $id_cliente_validacao_licenca, $id, $localLimpo, $id_cliente_validacao_licenca, $id, $localLimpo);

        if (!$stmt_rcl->execute()) {
            die('Erro na execução da query: ' . $stmt_rcl->error);
        }
    }
} else {
    echo "Nenhum dado foi enviado.";
}

$msg = "Alteração do contrato realizado com sucesso!";
echo "<script>alert('$msg'); window.location = '../pesquisarcontrato.php';</script>";
?>
