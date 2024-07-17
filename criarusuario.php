<?php 
include "tudo_cima.php";
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
        <input type="text" name="cpf" id="cpf" class="form-control" maxlength="14" placeholder="xxx.xxx.xxx-xx" />
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" class="form-control" />
    </div>

    <div class="form-group">
        <label for="telefone">Celular:</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">+55</span>
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="xx xxxxx-xxxx" maxlength="12"/>
        </div>
    </div>

    <div class="form-group">
        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" name="nascimento" id="nascimento" class="form-control" />
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
        <button class="botao" type="submit" style="background-color: #1f283e; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; cursor: pointer; border-radius: 5px; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#6861CE'" onmouseout="this.style.backgroundColor='#1f283e'">CADASTRAR USUÁRIO</button>                    
    </div>                
</form>

<!-- FINALIZA CONTEÚDO -->  

<script>
    // Função para aplicar máscara e restrição de entrada no campo CPF
    document.getElementById('cpf').addEventListener('input', function (e) {
        var target = e.target;
        var position = target.selectionStart;

        // Remove caracteres que não são dígitos
        var numbers = target.value.replace(/\D/g, '');

        // Aplica a máscara
        var formatted = '';
        if (numbers.length > 3) {
            formatted += numbers.substr(0, 3) + '.';
            if (numbers.length > 6) {
                formatted += numbers.substr(3, 3) + '.';
                if (numbers.length > 9) {
                    formatted += numbers.substr(6, 3) + '-';
                    if (numbers.length > 11) {
                        formatted += numbers.substr(9, 2);
                    } else {
                        formatted += numbers.substr(9);
                    }
                } else {
                    formatted += numbers.substr(6);
                }
            } else {
                formatted += numbers.substr(3);
            }
        } else {
            formatted = numbers;
        }

        // Define o valor formatado no campo
        target.value = formatted;

        // Ajusta a posição do cursor após a formatação
        if (position === 4 || position === 7 || position === 10) {
            position++;
        }
        target.setSelectionRange(position, position);
    });

    // Função para permitir somente números
    function SomenteNumero(e) {
        var tecla = e.keyCode || e.charCode;
        var charCode = String.fromCharCode(tecla);
        if (!/\d/.test(charCode)) {
            e.preventDefault();
        }
    }
</script>

<?php
include "tudo_baixo.php";
?>
