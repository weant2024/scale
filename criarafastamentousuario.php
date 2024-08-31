<?php
include "tudo_cima.php"; 
if ( $nivel < 2 ) 
{
	header("Location: sem_acesso.php"); exit;
}
?>
            <!-- INICIA CONTEÚDO -->   

            <p align="center">
              <b>CRIAR DE AFASTAMENTO</b>
            </p>
                
            <form method='POST' action="sec/enviarafastamento.php" class="user-form">
          
              <div class="form-group">
                <label><b>Nome:</b></label>
                <select class="form-select" id="nome" name="nome">
                    <?php

                      $query_validacao_licenca = "SELECT * FROM licenca WHERE id_usuario = '$idlogado'";
                      $resultado_validacao_licenca = $conn->query($query_validacao_licenca);
                          if ($resultado_validacao_licenca->num_rows > 0){
                              $dados_validacao_licenca = $resultado_validacao_licenca->fetch_assoc();        
                              $id_validacao_licenca = $dados_validacao_licenca['id']; 
                              $id_cliente_validacao_licenca = $dados_validacao_licenca['id_cliente']; 

                              $query_coleta_usuarios = "SELECT * FROM licenca WHERE id_cliente = '$id_cliente_validacao_licenca'";
                                  $resultado_coleta_usuarios = $conn->query($query_coleta_usuarios);
                                      while ($dados_coleta_usuarios = $resultado_coleta_usuarios->fetch_assoc()) {
                                              $id_coleta_usuarios = $dados_coleta_usuarios['id_usuario'];                       

                                          $query_validacao_usuario = "SELECT * FROM usuario WHERE id = '$id_coleta_usuarios' and ativo = 1";
                                              $resultado_validacao_usuario = $conn->query($query_validacao_usuario);
                                              
                                                  while ($dados_validacao_usuario = $resultado_validacao_usuario->fetch_assoc()) {
                                                      $id_validacao_usuario = $dados_validacao_usuario['id'];
                                                      $login_validacao_usuario = $dados_validacao_usuario['login'];
                                                          
                                                              echo '<option value="' . $id_validacao_usuario . '">' . $login_validacao_usuario . '</option>';
                                                  }
                                              
                                                  
                                      }
                          }else {
                              echo '<option value="">Nenhum usuário encontrado</option>';
                          }

                        // Preenche o dropdown com os usuários
                      //   $query_usuarios = "SELECT * FROM usuario ORDER BY login ASC";
                      //   $result_usuarios = $conn->query($query_usuarios);
                      //   if ($result_usuarios->num_rows > 0) {
                      //       while($row = $result_usuarios->fetch_assoc()) {
                      //           echo '<option value="' . $row["id"] . '">' . $row["nome"] . '</option>';
                      //       }
                      //   } else {
                      //       echo '<option value="">Nenhum usuário encontrado</option>';
                      //   }
                    ?>
                </select>
              </div>  

              <div class="form-group">
                <label><b>Motivo:</b></label><br />
                <div class="d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="motivo" id="motivo" value="Folga" checked/>
                        <label class="form-check-label" for="Folga">Folga</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="motivo" id="motivo" value="Atestado"/>
                        <label class="form-check-label" for="Atestado">Atestado</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="motivo" id="motivo" value="Licença"/>
                        <label class="form-check-label" for="Licença">Licença</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="motivo" id="motivo" value="Férias"/>
                        <label class="form-check-label" for="Férias">Férias</label>
                    </div>
                </div>
              </div>

              <div class="form-group">
                <label for="datainicial"><b>Data inicial:</b></label>
                <input type="date" name="datainicial" id="datainicial" class="form-control" />
              </div>

              <div class="form-group">
                <label for="datafinal"><b>Data final:</b></label>
                <input type="date" name="datafinal" id="datafinal" class="form-control" />
              </div>
              
              <div class="form-group">
              <button type="submit" style="background-color: #2a2f5b; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin-top: 10px; cursor: pointer; border-radius: 4px;"onmouseover="this.style.backgroundColor='#8800ff'"onmouseout="this.style.backgroundColor='#2a2f5b'">Cadastrar</button>
              </div>
           </form>

            <!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php"; 
?>