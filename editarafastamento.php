<?php
include "tudo_cima.php"; 
if ( $nivel < 2 ) 
{
	header("Location: sem_acesso.php"); exit;
}
?>
            <!-- INICIA CONTEÚDO -->   
            <?php
            $id_afastamento = $_GET['id'];
              $query_afastamento = "SELECT * FROM afastamento WHERE id = $id_afastamento";
                $result_afastamento = $conn->query($query_afastamento);
                  $dados_afastamento = $result_afastamento->fetch_assoc();

                    $query_usuario_afastado = "SELECT nome FROM usuario WHERE id = " . $dados_afastamento["id_usuario"] . "";
                      $result_usuario_afastado = $conn->query($query_usuario_afastado);
                        $dados_usuario_afastado = $result_usuario_afastado->fetch_assoc();

                        $datainicial = DateTime::createFromFormat('d/m/Y', $dados_afastamento['datainicial']);
                        $datafinal = DateTime::createFromFormat('d/m/Y', $dados_afastamento['datafinal']);
            ?>

            <p align="center">
              <b>EDITAR DE AFASTAMENTO</b>
            </p>
                
            <form method='POST' action="sec/atualizarafastamento.php" class="user-form">
          
              <div class="form-group">
                <label><b>Nome:</b></label>
                <input type="text" name="nome" id="nome" class="form-control" disabled  value="<?php echo '' .$dados_usuario_afastado['nome'] . ''?>"/>
              </div>  

              <div class="form-group">
                <label for="motivo">Motivo:</label>
                <input type="text" name="motivo" id="motivo" class="form-control" value="<?php echo '' .$dados_afastamento['motivo'] . ''?>"/>
              </div>

              <div class="form-group">
                <label for="datainicial">Data inicial:</label>
                <input type="date" name="datainicial" id="datainicial" class="form-control" value="<?php echo $datainicial->format('Y-m-d'); ?>"/>
              </div>

              <div class="form-group">
                <label for="datafinal">Data final:</label>
                <input type="date" name="datafinal" id="datafinal" class="form-control" value="<?php echo $datafinal->format('Y-m-d'); ?>"/>
              </div>
              
              <div class="form-group">
              <button type="submit" style="background-color: #2a2f5b; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin-top: 10px; cursor: pointer; border-radius: 4px;"onmouseover="this.style.backgroundColor='#8800ff'"onmouseout="this.style.backgroundColor='#2a2f5b'">Atualizar</button>
              </div>

              <input type="hidden" name="id_afastamento" value="<?php echo $id_afastamento?>">
              <input type="hidden" name="id_usuario" value="<?php echo $dados_afastamento["id_usuario"]?>">              
           </form>

            <!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php"; 
?>