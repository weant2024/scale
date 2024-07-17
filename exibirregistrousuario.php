<?php
include "tudo_cima.php"; 
if ($nivel < 2) {
	header("Location: sem_acesso.php");
	exit;
}
?>

<style>
    /* Estilos CSS para a página de detalhes do usuário */
    .user-details {
        max-width: 600px;
        margin: 50px auto; /* Centraliza na tela e aumenta a margem superior */
        padding: 20px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center; /* Centraliza o conteúdo dentro do container */
    }

    .user-details .form-group {
        margin-bottom: 10px;
        text-align: left; /* Alinha texto à esquerda dentro dos grupos de formulário */
    }

    .user-details label {
        font-weight: bold;
    }

    .user-details .info-message {
        margin-top: 20px;
        padding: 10px;
        background-color: #e7f3fe;
        border: 1px solid #bee5eb;
        border-radius: 5px;
        text-align: center; /* Centraliza o texto da mensagem */
    }

    .user-details .date-info {
        margin-top: 20px;
        text-align: center;
    }
</style>

<!-- INICIA CONTEÚDO -->   

<?php

$id = $_GET['id'];

$sqlc = "SELECT * FROM registrousuario WHERE id=?";
$stmt = $conn->prepare($sqlc);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $dados = $result->fetch_assoc();

    $login = htmlspecialchars($dados["login"]);
    $nome = htmlspecialchars($dados["nome"]);
    $cpf = htmlspecialchars($dados["cpf"]);
    $email = htmlspecialchars($dados["email"]);
    $telefone = htmlspecialchars($dados["telefone"]);
    $pnivel = htmlspecialchars($dados["pnivel"]);
    $pativo = htmlspecialchars($dados["pativo"]);
    $gerasenha = intval($dados["gerasenha"]);
    $horario = htmlspecialchars($dados["horario"]);
    $dia = htmlspecialchars($dados["dia"]);
    $mes = htmlspecialchars($dados["mes"]);
    $ano = htmlspecialchars($dados["ano"]);
    $operador = htmlspecialchars($dados["operador"]);

    // Exibir mensagem com base em $gerasenha
    $mensagem_senha = "";
    switch ($gerasenha) {
        case 1:
            $mensagem_senha = "FOI GERADA UMA NOVA SENHA PELO OPERADOR";
            break;
        case 2:
            $mensagem_senha = "FOI GERADA UMA NOVA SENHA PELO USUÁRIO";
            break;
        case 3:
            $mensagem_senha = "FOI CRIADO O USUÁRIO";
            break;
        case 4:
            $mensagem_senha = "FOI ALTERADO O USUÁRIO";
            break;
        default:
            $mensagem_senha = "";
            break;
    }
}
?>

<div class="user-details">
    <div class="form-group">
        <label><b>Login:</b></label>
        <?php echo $login; ?>
    </div>

    <div class="form-group">
        <label><b>Nome:</b></label>
        <?php echo $nome; ?>
    </div>

    <div class="form-group">
        <label><b>CPF:</b></label>
        <?php echo $cpf; ?>
    </div>

    <div class="form-group">
        <label><b>Email:</b></label>
        <?php echo $email; ?>
    </div>

    <div class="form-group">
        <label><b>Celular:</b></label>
        <?php echo $telefone; ?>
    </div>

    <div class="form-group">
        <label><b>Nível:</b></label>
        <?php echo $pnivel; ?>
    </div>

    <div class="form-group">
        <label><b>Status:</b></label>
        <?php echo $pativo; ?>
    </div>

    <div class="info-message"><?php echo $mensagem_senha; ?></div>

    <div class="date-info">
        <table width="100%" cellpadding="2px" cellspacing="2px" border="0">
            <tr>
                <td align="center"><b>Data:</b><?php echo " $horario, $dia de $mes de $ano"; ?></td>
            </tr>
            <tr>
                <td align="center"><b>Operador:</b><?php echo " $operador"; ?></td>
            </tr> 	
        </table>
    </div>
</div>

<!-- FINALIZA CONTEÚDO -->  

<?php include "tudo_baixo.php"; ?>
