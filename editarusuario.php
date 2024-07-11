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

              $sqlc = "SELECT * FROM usuario WHERE id='$id'"; //faz a busca com as palavras enviadas
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

              $sqlc1 = "SELECT * FROM usuario WHERE operador='$operador'"; //faz a busca com as palavras enviadas
              $query1 = $conn->query($sqlc1);
              $dados1 = $query1->fetch_assoc();
            ?>

            <form method="POST" action='sec/atualizarusuario.php?id=<?php echo $dados['id']; ?>)'>
                <div class="form-group">
                    <label for="id"><b>ID:</b></label>
                    <?php echo $id;?>
                </div>

                <div class="form-group">
                    <label for="login"><b>Login:</b></label>
                    <input type="text" name="login" id="login" class="form-control" Value="<?php echo $login;?>"/>
                </div>

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" Value="<?php echo $nome;?>"/>
                </div>

                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" Value="<?php echo $cpf;?>"/>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" class="form-control" Value="<?php echo $email;?>"/>
                </div>

                <div class="form-group">
                    <label for="telefone">Celular:</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" placeholder="xx xxxxx-xxxx" Value="<?php echo $telefone;?>"/>
                </div>

                <div class="form-group">
                    <label for="nascimento">Data de Nascimento:</label>
                    <input type="text" name="nascimento" id="nascimento" class="form-control" Value="<?php echo $nascimento;?>"/>
                </div>

                <div class="form-group">
                    <label for="genero">Gênero:</label>
                    <select class="form-select form-control" id="defaultSelect" name="genero">
                    <option <?php if ( $genero == "Masculino" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="Masculino">Masculino</option>
                    <option <?php if ( $genero == "Feminino" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="Feminino">Feminino</option>
                    <option <?php if ( $genero == "Não definido" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="Não definido">Não definido</option> 
                    </select>  
                </div>

                <div class="form-group">
                    <label for="nivelusuario">Nível:</label>
                    <select name="nivelusuario" id="nivelusuario" class="form-control">
                    <option <?php if ( $nivelusuario == "1" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="1">Usuário</option>
                    <option <?php if ( $nivelusuario == "2" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="2">Gestor</option>
                    <option <?php if ( $nivelusuario == "3" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="3">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ativousuario">Status:</label>
                    <select name="ativousuario" id="ativousuario" class="form-control">
                    <option <?php if ( $ativousuario == "1" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="1">Ativo</option>
                    <option <?php if ( $ativousuario == "0" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="0">Desativado</option>
                    </select>
                </div> 

                    <div class="form-group" align="center">                                   
                      <button class="botao" type="submit">EDITAR USUÁRIO</button>
            </form>
                      <button class="botao" onclick="redirectTo('sec/enviarsenhausuario.php', <?php echo $dados['id']; ?>)">GERAR NOVA SENHA</button>
                      <button class="botao" onclick="redirectTo('afastamentousuario.php', <?php echo $dados['id']; ?>)">CADASTRAR AFASTAMENTO</button>                         
                    </div>
            </div>

	            <br />

                <b>HISTÓRICO DO USUÁRIO</b>
            
              <table class="legenda" width="100%" border="0">
                <tr>	
                  <td><b>Operador</b></td> 			
                  <td><b>Horário</b></td>
                  <td><b>Dia</b></td>
                  <td><b>Mês</b></td>
                  <td><b>Ano</b></td>                  
                </tr>
                <?php

                  $search = @$_POST['search'];
                  $search1 = @$_POST['search1'];
                  $search2 = @$_POST['search2'];


                  $busca_query1 = "SELECT * FROM registrousuario WHERE login='$login' ORDER BY id DESC";//faz a busca com as palavras enviadas
                  $result = $conn->query($busca_query1);


                  if (empty($result)) { //Se nao achar nada, lança essa mensagem
                      echo "Nenhum registro encontrado.";
                  }

                  // quando existir algo em '$busca_query' ele realizará o script abaixo.
                  while ($dados1 = $result->fetch_assoc()) {

                ?>

                <tr>		
                  <td><?php echo '<a href="exibirregistrousuario.php?id=' . $dados1['id'] . '"> '. $dados1['operador'] . '<br /></a>';?></td>       
                  <td><?php echo "$dados1[horario]";?></td>
                  <td><?php echo "$dados1[dia]";?></td>	
                  <td><?php echo "$dados1[mes]";?></td>
                  <td><?php echo "$dados1[ano]";?></td>                  	
                </tr>
                <?php
                }
                ?>
                <br /> 
              </table>              
            
            <?php
            if (@$result->num_rows > 0) { 
            ?> 
            <table class="legenda" width="100%">
              <tr>
                <td align="right">
                  <?php 
                    $num_rows = @$result->num_rows;
                    echo "<b>$num_rows registros</b>";
                  ?>
                </td>
              </tr>  
            </table>
            <?php
            }
            ?>
          
            <!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>