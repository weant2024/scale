<?php 
include "tudo_cima.php";
if ( $nivel < 2 ) 
{
	header("Location: sem_acesso.php"); exit;
}
?>
            <!-- INICIA CONTEÚDO -->   

            <p align="center">
              <b>CRIAR USUÁRIO</b>
            </p>
                
            <form method='post' name="contato" action="sec/enviarusuario.php" class="user-form">
                <div class="form-group">
                  <label for="login">Login:</label>
                  <input type="text" name="login" id="login" class="form-control" />
                </div>

                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input type="text" name="nome" id="nome" class="form-control" />
                </div>

                <div class="form-group">
                  <label for="cpf">CPF:</label>
                  <input type="text" name="cpf" id="cpf" class="form-control" />
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" name="email" id="email" class="form-control" />
                </div>

                <div class="form-group">
                  <label for="telefone">Celular:</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">+55</span>
                    <input type="text" class="form-control" placeholder="xx xxxxx-xxxx" maxlength="12" onKeyPress="Mascaracelular(this); return SomenteNumero(event);" id="celular" name="celular"/>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nascimento">Data de Nascimento:</label>
                  <input type="date" name="nascimento" id="nascimento" class="form-control" placeholder="xx/xx/xxxx" />
                </div>

                <div class="form-group">
                  <label for="genero">Gênero:</label>
                  <select class="form-select form-control" id="defaultSelect" name="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Não definido">Não definido</option> 
                  </select>  
                </div>

                <div class="form-group">
                  <label for="nivelusuario">Nível:</label>
                  <select name="nivelusuario" id="nivelusuario" class="form-control">
                    <option selected value="1">Usuário</option>
                    <option value="2">Gestor</option>
                    <option value="3">Admin</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="ativousuario">Status:</label>
                  <select name="ativousuario" id="ativousuario" class="form-control">
                    <option selected value="1">Ativo</option>
                    <option value="0">Desativado</option>
                  </select>
                </div>   
                  
                  <div class="form-group">                    
                    <button class="botao" type="submit">CADASTRAR USUÁRIO</button>                    
                  </div>                
            </form>

            <!-- FINALIZA CONTEÚDO -->  
          
<?php
include "tudo_baixo.php";
?>
