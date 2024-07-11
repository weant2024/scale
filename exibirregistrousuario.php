<?php
include "tudo_cima.php"; 
if ( $nivel < 2 ) 
{
	header("Location: sem_acesso.php"); exit;
}
?>

            <!-- INICIA CONTEÚDO -->   

            <?php

              $id = $_GET['id'];

              $sqlc = "SELECT * FROM registrousuario WHERE id='$id'"; //faz a busca com as palavras enviadas
              $result = $conn->query($sqlc);
              $dados = $result->fetch_assoc();

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

            ?>

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
                <label><b>Status:</b></label>
                <?php echo $pativo;?>
            </div>

            <div align="center" style="margin-top: 20px;">
              <?php
              if ($gerasenha == 1) {
                  echo "<div class='info-message'>FOI GERADA UMA NOVA SENHA PELO OPERADOR</div>";
              } elseif ($gerasenha == 2) {
                  echo "<div class='info-message'>FOI GERADA UMA NOVA SENHA PELO USUÁRIO</div>";
              } elseif ($gerasenha == 3) {
                  echo "<div class='info-message'>FOI CRIADO O USUÁRIO</div>";
              } elseif ($gerasenha == 4) {
                  echo "<div class='info-message'>FOI ALTERADO O USUÁRIO</div>";
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

         <!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>