<?php
include "tudo_cima.php"; 
if ( $nivel < 2 ) 
{
	header("Location: sem_acesso.php"); exit;
}
?>

            <!-- INICIA CONTEÚDO -->   

            <div align="center">
              <form action="" method="post">
                <table width="auto"> 
                  <tr align="center">
                    <td>
                      <select name="filtro">                                               
                        <option value="login">Login</option> 
                        <option value="nome">Nome</option>  
                        <option value="cpf">CPF</option>  
                        <option value="telefone">Celular</option>
                        <option value="horario">Horário</option> 
                        <option value="dia">Dia</option>                        
                        <option value="mes">Mês</option> 
                        <option value="ano">Ano</option> 
                        <option value="pnivel">Nível</option> 
                        <option value="pativo">Status</option> 
                      </select>
                    </td>                  
                    <td> <input type="text" name="palavra" size="auto" id="palavra"/> </td>
                    <td> <input type="submit" Value="Pesquisar" /> </td>
                  </tr>
                </table> 
              </form>               
              <?php
              $filtro = @$_POST['filtro'];
              $busca = @$_POST['palavra'];
              
              $busca_query = "SELECT * FROM registrousuario WHERE $filtro LIKE '%$busca%' ORDER BY id DESC";
              $result = $conn->query($busca_query);              
              
              if (@$result->num_rows < 1) { //Se nao achar nada, lança essa mensagem
                echo "Nenhum registro encontrado.";
              }
              
              else {
              ?>
              <table class="legenda" width="100%">                
                  <tr width="100%">                    
                    <td><b>Login</b></td>                     
                    <td><b>Horário</b></td>
	                	<td><b>Mês</b></td>
                    <td><b>Ano</b></td>                    
                  </tr>
              <?php      
              // quando existir algo em '$busca_query' ele realizará o script abaixo.
                while ($dados = $result->fetch_assoc()) {                             
                ?>              
                
                    <tr width="100%">	
                      <td> <?php echo "<a href='exibirregistrousuario.php?id=" . $dados['id'] . "'>$dados[login]</a>";?></td>		                    		
                      <td> <?php echo "$dados[horario]";?></td>
                      <td> <?php echo "$dados[mes]";?></td>
                      <td> <?php echo "$dados[ano]";?></td>                     
                    </tr>	
                <?php               
                ?>    
                <?php
                }
              }
                ?>	
              
                </table>                
            </div>

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