<?php
include "tudo_cima.php"; 
if ($nivel < 2) {
    header("Location: sem_acesso.php"); exit;
}
?>

<!-- INICIA CONTEÚDO -->   
<style>
    .border-changed {
        border-color: #8800ff !important;
    }
    .color-label{
        color: #8800ff !important;
        font-weight: bold;
    }
</style>
<?php


$id = $_GET['id'];

$query_registro_usuario = "SELECT * FROM registrousuario WHERE id = '$id'";
$resultado_registro_usuario = $conn->query($query_registro_usuario);
$dados_registro_usuario = $resultado_registro_usuario->fetch_assoc();
$id_usuario_registro_usuario = $dados_registro_usuario['id_usuario'];

$query_get_licenca = "SELECT * FROM licenca WHERE id_usuario = '$id_usuario_registro_usuario'";
$resultado_get_licenca = $conn->query($query_get_licenca);
$dados_get_licenca = $resultado_get_licenca->fetch_assoc();
$id_cliente_get_licenca = $dados_get_licenca['id_cliente'];

if (($id_cliente_vdl_licenca <> $id_cliente_get_licenca) && ($nivel < 3 ) && ($tipo_vdl_licenca < 6)){
    echo "VOCÊ NÃO TEM PERMISSÃO!";
} else {

    $sqlc = "SELECT * FROM registrousuario WHERE id='$id'";
    $result = $conn->query($sqlc);
    $dados = $result->fetch_assoc();

    $id_user_exibicao = $dados["id_usuario"];
    $login = $dados["login"];
    $nome = $dados["nome"];
    $cpf = $dados["cpf"];
    $telefone = $dados["telefone"];
    $nascimento = $dados["nascimento"];    
    $genero = $dados["genero"];             
    $email = $dados["email"];
    $pnivel = $dados["pnivel"];
    $pativo = $dados["pativo"];
    $gerasenha = $dados["gerasenha"];
    $horario = $dados["horario"];
    $dia = $dados["dia"];
    $semana = $dados["semana"];
    $mes = $dados["mes"];
    $ano = $dados["ano"];
    $operador = $dados["operador"];

    $query_diferencas = "                        
        WITH CTE AS (
            SELECT 
                *,
                ROW_NUMBER() OVER (PARTITION BY id_usuario ORDER BY ano DESC, mes DESC, dia DESC) AS row_num
            FROM 
                registrousuario
            WHERE 
                id_usuario = $id_user_exibicao
        )
        SELECT
            t1.id AS id_ultima,
            t1.id_usuario,
            t2.id AS id_penultima,
            CONCAT_WS(', ',
                CASE WHEN t1.login != t2.login THEN 'login' ELSE NULL END,
                CASE WHEN t1.nome != t2.nome THEN 'nome' ELSE NULL END,
                CASE WHEN t1.cpf != t2.cpf THEN 'cpf' ELSE NULL END,
                CASE WHEN t1.nascimento != t2.nascimento THEN 'nascimento' ELSE NULL END,
                CASE WHEN t1.genero != t2.genero THEN 'genero' ELSE NULL END,
                CASE WHEN t1.email != t2.email THEN 'email' ELSE NULL END,
                CASE WHEN t1.telefone != t2.telefone THEN 'telefone' ELSE NULL END,
                CASE WHEN t1.departamento != t2.departamento THEN 'departamento' ELSE NULL END,
                CASE WHEN t1.cargo != t2.cargo THEN 'cargo' ELSE NULL END,
                CASE WHEN t1.pnivel != t2.nivel THEN 'pnivel' ELSE NULL END,
                CASE WHEN t1.pativo != t2.ativo THEN 'pativo' ELSE NULL END
            ) AS diferencas,
            CASE WHEN t1.login != t2.login THEN t1.login ELSE NULL END AS login_ultima,
            CASE WHEN t1.login != t2.login THEN t2.login ELSE NULL END AS login_penultima,
            CASE WHEN t1.nome != t2.nome THEN t1.nome ELSE NULL END AS nome_ultima,
            CASE WHEN t1.nome != t2.nome THEN t2.nome ELSE NULL END AS nome_penultima,
            CASE WHEN t1.cpf != t2.cpf THEN t1.cpf ELSE NULL END AS cpf_ultima,
            CASE WHEN t1.cpf != t2.cpf THEN t2.cpf ELSE NULL END AS cpf_penultima,
            CASE WHEN t1.nascimento != t2.nascimento THEN t1.nascimento ELSE NULL END AS nascimento_ultima,
            CASE WHEN t1.nascimento != t2.nascimento THEN t2.nascimento ELSE NULL END AS nascimento_penultima,
            CASE WHEN t1.genero != t2.genero THEN t1.genero ELSE NULL END AS genero_ultima,
            CASE WHEN t1.genero != t2.genero THEN t2.genero ELSE NULL END AS genero_penultima,
            CASE WHEN t1.email != t2.email THEN t1.email ELSE NULL END AS email_ultima,
            CASE WHEN t1.email != t2.email THEN t2.email ELSE NULL END AS email_penultima,
            CASE WHEN t1.telefone != t2.telefone THEN t1.telefone ELSE NULL END AS telefone_ultima,
            CASE WHEN t1.telefone != t2.telefone THEN t2.telefone ELSE NULL END AS telefone_penultima,
            CASE WHEN t1.departamento != t2.departamento THEN t1.departamento ELSE NULL END AS departamento_ultima,
            CASE WHEN t1.departamento != t2.departamento THEN t2.departamento ELSE NULL END AS departamento_penultima,
            CASE WHEN t1.cargo != t2.cargo THEN t1.cargo ELSE NULL END AS cargo_ultima,
            CASE WHEN t1.cargo != t2.cargo THEN t2.cargo ELSE NULL END AS cargo_penultima,
            CASE WHEN t1.pnivel != t2.nivel THEN t1.pnivel ELSE NULL END AS pnivel_ultima,
            CASE WHEN t1.pnivel != t2.nivel THEN t2.pnivel ELSE NULL END AS pnivel_penultima,
            CASE WHEN t1.pativo != t2.ativo THEN t1.pativo ELSE NULL END AS pativo_ultima,
            CASE WHEN t1.pativo != t2.ativo THEN t2.pativo ELSE NULL END AS pativo_penultima
        FROM 
            CTE t1
        JOIN 
            CTE t2 ON t1.id = $id AND t2.row_num = 2
        WHERE 
            t1.id_usuario = $id_user_exibicao AND t2.id_usuario = $id_user_exibicao
        ORDER BY 
            t1.ano DESC, t1.mes DESC, t1.dia DESC;    
        ";

    $result_diferencas = $conn->query($query_diferencas);
    $dados_diferencas = $result_diferencas->fetch_assoc();    
    $diferencas = explode(', ', $dados_diferencas['diferencas']);

    function addDifferenceClass($field, $diferencas) {
        return in_array($field, $diferencas) ? 'color-label border-changed' : '';
    }
?>

<div class="form-group <?php echo addDifferenceClass('login', $diferencas); ?>">
    <label class="<?php echo addDifferenceClass('login', $diferencas); ?>"><b>Login:</b></label>
    <?php echo $login; ?>
</div>

<div class="form-group <?php echo addDifferenceClass('nome', $diferencas); ?>">
    <label class="<?php echo addDifferenceClass('nome', $diferencas); ?>"><b>Nome:</b></label>
    <?php echo $nome; ?>
</div>

<div class="form-group <?php echo addDifferenceClass('cpf', $diferencas); ?>">
    <label class="<?php echo addDifferenceClass('cpf', $diferencas); ?>"><b>CPF:</b></label>
    <?php echo $cpf; ?>
</div>

<div class="form-group <?php echo addDifferenceClass('email', $diferencas); ?>">
    <label class="<?php echo addDifferenceClass('email', $diferencas); ?>"><b>Email:</b></label>
    <?php echo $email; ?>
</div>

<div class="form-group <?php echo addDifferenceClass('telefone', $diferencas); ?>">
    <label class="<?php echo addDifferenceClass('telefone', $diferencas); ?>"><b>Celular:</b></label>
    <?php echo $telefone; ?>
</div>

<div class="form-group <?php echo addDifferenceClass('nascimento', $diferencas); ?>">
    <label class="<?php echo addDifferenceClass('nascimento', $diferencas); ?>"><b>Nascimento:</b></label>
    <?php echo $nascimento; ?>
</div>

<div class="form-group <?php echo addDifferenceClass('genero', $diferencas); ?>">
    <label class="<?php echo addDifferenceClass('genero', $diferencas); ?>"><b>Gênero:</b></label>
    <?php echo $genero; ?>
</div>

<div class="form-group <?php echo addDifferenceClass('pnivel', $diferencas); ?>">
    <label class="<?php echo addDifferenceClass('pnivel', $diferencas); ?>"><b>Nivel:</b></label>
    <?php echo $pnivel; ?>
</div>

<div class="form-group <?php echo addDifferenceClass('pativo', $diferencas); ?>">
    <label class="<?php echo addDifferenceClass('pativo', $diferencas); ?>"><b>Status:</b></label>
    <?php echo $pativo; ?>
</div>

<div align="center" style="margin-top: 20px;">
    <?php
    if ($gerasenha == 1) {
        echo "<div style='border-radius: 8px;
    background-color: #8800ff;
    padding: 10px;
    margin-bottom: 20px; /* Espaçamento abaixo da mensagem */
    font-weight: bold;
    font-family: Verdana, Geneva, sans-serif;
    font-size: 14px;
    color: #ffffff;
    text-align: center;'>FOI GERADA UMA NOVA SENHA PELO OPERADOR</div>";
    } elseif ($gerasenha == 2) {
        echo "<div style='border-radius: 8px;
    background-color: #8800ff;
    padding: 10px;
    margin-bottom: 20px; /* Espaçamento abaixo da mensagem */
    font-weight: bold;
    font-family: Verdana, Geneva, sans-serif;
    font-size: 14px;
    color: #ffffff;
    text-align: center;'>FOI GERADA UMA NOVA SENHA PELO USUÁRIO</div>";
    } elseif ($gerasenha == 3) {
        echo "<div style='border-radius: 8px;
    background-color: #8800ff;
    padding: 10px;
    margin-bottom: 20px; /* Espaçamento abaixo da mensagem */
    font-weight: bold;
    font-family: Verdana, Geneva, sans-serif;
    font-size: 14px;
    color: #ffffff;
    text-align: center;'>FOI CRIADO O USUÁRIO</div>";
    } elseif ($gerasenha == 4) {
        echo "<div style='border-radius: 8px;
    background-color: #8800ff;
    padding: 10px;
    margin-bottom: 20px; /* Espaçamento abaixo da mensagem */
    font-weight: bold;
    font-family: Verdana, Geneva, sans-serif;
    font-size: 14px;
    color: #ffffff;
    text-align: center;'>FOI ALTERADO O USUÁRIO</div>";
    }
    ?>

    <table width="100%" cellpadding="2px" cellspacing="2px" border="0">
        <tr>
            <td align="center"><b>Data:</b><?php echo " $horario, $dia de $mes de $ano";?></td>
        </tr>
        <tr>
            <td align="center"><b>Operador:</b><?php echo " $operador";?></td>
        </tr> 	
    </table>
</div>

<?php
}
?>

<!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>
