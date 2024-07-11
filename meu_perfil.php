<?php
include "tudo_cima.php"; 

$idlogado = $_GET['id'];

              $sqlc = "SELECT * FROM usuario WHERE login='$usuariologado'"; //faz a busca com as palavras enviadas
              $result = $conn->query($sqlc);
              $dados = $result->fetch_assoc();
              
              $id = $dados['id'];
              $login = $dados["login"];
              $nome = $dados["nome"];
              $cpf = $dados["cpf"];
              $telefone = $dados["telefone"];
              $nascimento = $dados["nascimento"];              
              $email = $dados["email"];
              $pnivel = $dados["pnivel"];
              $pativo = $dados["pativo"];
              $gerasenha = $dados["gerasenha"];
              $horario = $dados["horario"];
              $dia = $dados["dia"];
              $semana = $dados["semana"];
              $mes = $dados["mes"];
              $ano =$dados["ano"];
              $operador = $dados["operador"];

if ("$usuariologado" != "$id") {
  header("Location: sem_acesso.php");
}
?>

            <!-- INICIA CONTEÚDO -->              

            <div class="form-group">
                <label><b>Login:</b></label>
                <?php echo $login;?>
            </div>

            <div class="form-group">
                <label><b>Nome:</b></label>
                <?php echo $nome;?>
            </div>

            <div class="form-group">
                <label><b>CPF:</b></label>
                <?php echo $cpf;?>
            </div>

            <div class="form-group">
                <label><b>Email:</b></label>
                <?php echo $email;?>
            </div>

            <div class="form-group">
                <label><b>Celular:</b></label>
                <?php echo $telefone;?>
            </div>

            <div class="form-group">
                <label><b>Nivel:</b></label>
                <?php echo $pnivel;?>
            </div>

            <div class="form-group">                    
              <button class="botao" type="submit">Alterar senha</button>                    
            </div>
            
         <!-- FINALIZA CONTEÚDO -->

<?php
include "tudo_baixo.php"; 
?>