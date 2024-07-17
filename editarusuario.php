<?php
include "tudo_cima.php"; 
if ($nivel < 2) {
    header("Location: sem_acesso.php");
    exit;
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<script>
$(document).ready(function(){
    $('#cpf').inputmask('999.999.999-99', { placeholder: '___.___.___-__' });
    $('#telefone').inputmask('(99) 99999-9999', { placeholder: '(__) _____-____' });
    $('#nascimento').inputmask('99/99/9999', { placeholder: '__/__/____' });
});

function redirectTo(url, id) {
    window.location.href = url + '?id=' + id;
}
</script>

<!-- INICIA CONTEÚDO -->   

<?php
$id = $_GET['id'];

$sqlc = "SELECT * FROM usuario WHERE id='$id'";
$query = $conn->query($sqlc);
$dados = $query->fetch_assoc();

$login = $dados["login"];           
$nome = $dados["nome"];
$cpf = $dados["cpf"];
$telefone = $dados["telefone"];
$nascimento = $dados["nascimento"];  
$genero = $dados["genero"];             
$email = $dados["email"];
$cargo = $dados["cargo"];
$departamento = $dados["departamento"];
$nivelusuario = $dados["nivel"];
$ativousuario = $dados["ativo"];
$horario = $dados["horario"];
$dia = $dados["dia"];
$semana = $dados["semana"];
$mes = $dados["mes"];
$ano = $dados["ano"];
$operador = $_SESSION["UsuarioLogin"];

$sqlc1 = "SELECT * FROM usuario WHERE operador='$operador'";
$query1 = $conn->query($sqlc1);
$dados1 = $query1->fetch_assoc();
?>

<form method="POST" action='sec/atualizarusuario.php?id=<?php echo $dados['id']; ?>'>
    <div class="form-group">
        <label for="id"><b>ID:</b></label>
        <?php echo $id;?>
    </div>

    <div class="form-group">
        <label for="login"><b>Login:</b></label>
        <input type="text" name="login" id="login" class="form-control" value="<?php echo $login;?>"/>
    </div>

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome;?>"/>
    </div>

    <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo $cpf;?>"/>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" class="form-control" value="<?php echo $email;?>"/>
    </div>

    <div class="form-group">
        <label for="telefone">Celular:</label>
        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(xx) xxxxx-xxxx" value="<?php echo $telefone;?>"/>
    </div>

    <div class="form-group">
        <label for="nascimento">Data de Nascimento:</label>
        <input type="text" name="nascimento" id="nascimento" class="form-control" value="<?php echo $nascimento;?>"/>
    </div>

    <div class="form-group">
        <label for="genero">Gênero:</label>
        <select class="form-select form-control" id="genero" name="genero">
            <option <?php if ($genero == "Masculino") echo "selected"; ?> value="Masculino">Masculino</option>
            <option <?php if ($genero == "Feminino") echo "selected"; ?> value="Feminino">Feminino</option>
            <option <?php if ($genero == "Não definido") echo "selected"; ?> value="Não definido">Não definido</option> 
        </select>  
    </div>

    <div class="form-group">
        <label for="nivelusuario">Nível:</label>
        <select name="nivelusuario" id="nivelusuario" class="form-control">
            <option <?php if ($nivelusuario == "1") echo "selected"; ?> value="1">Usuário</option>
            <option <?php if ($nivelusuario == "2") echo "selected"; ?> value="2">Gestor</option>
            <option <?php if ($nivelusuario == "3") echo "selected"; ?> value="3">Admin</option>
        </select>
    </div>

    <div class="form-group">
        <label for="ativousuario">Status:</label>
        <select name="ativousuario" id="ativousuario" class="form-control">
            <option <?php if ($ativousuario == "1") echo "selected"; ?> value="1">Ativo</option>
            <option <?php if ($ativousuario == "0") echo "selected"; ?> value="0">Desativado</option>
        </select>
    </div> 

    <div class="form-group" align="center">                                   
        <button class="botao" type="submit">EDITAR USUÁRIO</button>
        <button class="botao" type="button" onclick="redirectTo('sec/enviarsenhausuario.php', <?php echo $dados['id']; ?>)">GERAR NOVA SENHA</button>
        <button class="botao" type="button" onclick="redirectTo('afastamentousuario.php', <?php echo $dados['id']; ?>)">CADASTRAR AFASTAMENTO</button>                         
    </div>
</form>

<br />

<style>
    /* Estilos para a tabela de histórico */
    .legenda {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
        font-family: Arial, sans-serif;
    }
    .legenda th, .legenda td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }
    .legenda th {
        background-color: #f2f2f2;
    }
    .legenda a {
        color: #007bff;
        text-decoration: none;
    }
    .legenda a:hover {
        text-decoration: underline;
    }

    /* Estilos para o botão de mostrar/ocultar */
    #toggleHistory {
        background-color: #2a2f5b;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        margin-top: 10px;
        border-radius: 4px;
        font-size: 12px;
    }
    #toggleHistory:hover {
        background-color: #8800ff;
    }
</style>


<button id="toggleHistory" onmouseover="this.style.backgroundColor='#8800ff'" onmouseout="this.style.backgroundColor='#2a2f5b'">Mostrar Histórico</button>

<table id="historicoTable" class="legenda" style="display: none;">
    <tr>    
        <th>Operador</th>           
        <th>Horário</th>
        <th>Dia</th>
        <th>Mês</th>
        <th>Ano</th>                  
    </tr>
    <?php
    $busca_query1 = "SELECT * FROM registrousuario WHERE login='$login' ORDER BY id DESC";
    $result = $conn->query($busca_query1);

    if ($result->num_rows > 0) {
        while ($dados1 = $result->fetch_assoc()) {
            ?>
            <tr>        
                <td><?php echo '<a href="exibirregistrousuario.php?id=' . $dados1['id'] . '">' . $dados1['operador'] . '</a>'; ?></td>       
                <td><?php echo $dados1['horario']; ?></td>
                <td><?php echo $dados1['dia']; ?></td>    
                <td><?php echo $dados1['mes']; ?></td>
                <td><?php echo $dados1['ano']; ?></td>                   
            </tr>
            <?php
        }
    } else {
        echo '<tr><td colspan="5">Nenhum registro encontrado.</td></tr>';
    }
    ?>
</table>

<?php
if ($result->num_rows > 0) { 
?> 
<table class="legenda" width="100%">
    <tr>
        <td align="right">
            <?php 
            $num_rows = $result->num_rows;
            echo "<b>$num_rows registros</b>";
            ?>
        </td>
    </tr>  
</table>
<?php
}
?>

<script>
    // Script para mostrar/ocultar o histórico ao clicar no botão
    document.getElementById('toggleHistory').addEventListener('click', function() {
        var table = document.getElementById('historicoTable');
        if (table.style.display === 'none') {
            table.style.display = 'table';
            this.textContent = 'Ocultar Histórico';
            this.style.backgroundColor = '#8800ff'; // Mudança de cor quando mostrado
        } else {
            table.style.display = 'none';
            this.textContent = 'Mostrar Histórico';
            this.style.backgroundColor = '#2a2f5b'; // Mudança de cor quando ocultado
        }
    });
</script>

<!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>
