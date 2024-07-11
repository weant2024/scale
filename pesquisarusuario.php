<?php
include "tudo_cima.php"; 
if ( $nivel < 2 ) 
{
	header("Location: sem_acesso.php"); exit;
}
?>

          <!-- INICIA CONTEÚDO -->
          
            <form action="" method="post">
              <table style="width: 100%;">
                <tr align="center">
                  <td style="width: 30%;">
                    <select name="filtro" style="width: 100%;">                                               
                      <option value="login">Login</option> 
                      <option value="nome">Nome</option>  
                      <option value="cpf">CPF</option>  
                      <option value="telefone">Celular</option>                        
                      <option value="pnivel">Nível</option> 
                      <option value="pativo">Status</option> 
                    </select>
                  </td>                  
                  <td style="width: 50%;"> 
                    <input type="text" name="palavra" style="width: 100%; box-sizing: border-box; padding: 5px 8px; font-size: 14px;" id="palavra"/> 
                  </td>
                  <td style="width: 20%; vertical-align: middle;"> 
                  <input type="submit" Value="Pesquisar" style="width: 100%; padding: 6px; font-size: 14px; background-color: #0f2e57; border: none; color: white; cursor: pointer;" onmouseover="this.style.backgroundColor='#5C55BF';" onmouseout="this.style.backgroundColor='#0f2e57';"/>

                  </td>
                </tr>
              </table>
            </form> 
            
            <?php
            $filtro = @$_POST['filtro'];
            $busca = @$_POST['palavra'];
            
            $busca_query = "SELECT * FROM usuario WHERE $filtro LIKE '%$busca%' ORDER BY id DESC";
            $result = $conn->query($busca_query);

            
            if (@$result->num_rows < 1) { // Se não achar nada, lança essa mensagem
              echo "<p>Nenhum registro encontrado.</p>";
            } else {
            ?>
            <table style="width: 100%;">
              <tr>
                <?php 
                  if ($filtro == "login") { 
                    echo '<th>Login</th>';
                  } elseif ($filtro == "cpf") { 
                    echo '<th>Login</th><th>CPF</th>';
                  } elseif ($filtro == "pativo") { 
                    echo '<th>Login</th><th>Status</th>';
                  } else {
                    $upercasefiltro = ucfirst($filtro);
                    echo '<th>Login</th><th>'. $upercasefiltro . '</th>';
                  }
                ?>          
              </tr>
              <?php      
              while ($dados = $result->fetch_assoc()) {                                 
              ?>              
                <tr>  
                  <?php
                  if ($filtro == "login") { 
                    echo '<td><a href="editarusuario.php?id=' . $dados['id'] . '">' . $dados['login'] . '</a></td>';
                  } else {
                    echo '<td><a href="editarusuario.php?id=' . $dados['id'] . '">' . $dados['login'] . '</a></td><td>'. $dados[$filtro] . '</td>';
                  }
                  ?>                      
                </tr> 
              <?php               
              }
              ?>  
            </table>
            <?php
            }
            ?>

            <?php
            if (@$result->num_rows > 0) { 
            ?> 
            <div class="resultados-count">
              <?php 
                $num_rows = @$result->num_rows;
                echo "<p><b>$num_rows registros</b></p>";
              ?>
            </div>
            <?php
            }
            ?>

            <!-- FINALIZA CONTEÚDO -->  
<?php
include "tudo_baixo.php";
?>