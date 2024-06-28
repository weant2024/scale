<?php
include "../sec/config.php"; 
include "../sec/sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: ../sec/sec_tipo.php"); exit;
}
?>
<head>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../js/mascara_celular.js"></script>
<title>Scale</title>
<script>
function validar() {

if(document.contato.login.value=="") {
alert("Digite o LOGIN do usuário");
document.contato.login.focus();
return false; 
} 
if(document.contato.nome.value=="") {
alert("Digite o NOME do usuário");
document.contato.nome.focus();
return false; 
} 
if(document.contato.matricula.value=="") {
alert("Digite o Matrícula do usuário");
document.contato.matricula.focus();
return false; 
} 
if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.contato.email.value))) {
alert("Digite corretamente o EMAIL do usuário");
document.contato.email.focus();		
return false;
}
if(document.contato.telefone.value==""){
alert("Digite o n\u00famero de celular corretamente");
document.contato.telefone.focus();     
return false;
}
if(document.contato.telefone.value.length < 15){
alert("Digite o n\u00famero de celular corretamente");
document.contato.telefone.focus();     
return false;
} 
else {
return true; 
}

}
</script>
</head>

<body>

  <p align="center">
    <b>CRIAR USUÁRIO</b>
  </p>
      
  <form id="contato" method='post' name="contato" action="../sec/enviarusuario.php" onSubmit="return validar();">   
    Login:
    <input type="text" name="login" id="login" onKeyPress="return SomenteLetra(event)" onFocus="form1(this)" onBlur="form2(this)" class="inputbox required; input-inicial" title="Login" />
    
    Nome:
    <input type="text" name="nome" id="nome" onKeyPress="return SomenteLetra(event)" onFocus="form1(this)" onBlur="form2(this)" class="inputbox required; input-inicial" title="Digite o nome" />	

    RG:
    <input type="text" name="rg" id="rg"/>

    RG ORGÃO:
    <input type="text" name="rgorgao" id="rgorgao"/>

    RG UF:
    <input type="text" name="rguf" id="rguf"/>

    Email:
    <input type="text" name="email" id="email" class="inputbox required; input-inicial"  onFocus="form1(this)" onBlur="form3(this)" title="Digite o email"/>
    
    Celular:
    <input type="text" name="telefone" id="telefone"  class="input-inicialn" title="Digite o celular" maxlength="16" onKeyPress="Mascaracelular(this); return SomenteNumero(event);" onFocus="form1(this)" onBlur="form3(this)"/>
    
    Nível:
    <select name="nivelusuario" id="nivelusuario">
      <option selected value="1">Usuário</option>
      <option value="2">Gestor</option>
      <option value="3">Admin</option>
    </select>
    
    Status:
    <select name="ativousuario" id="ativousuario">
      <option selected value="1">Ativo</option>
      <option value="0">Desativado</option>
    </select>
                
    <button type="submit" onClick="submitbutton( this.form );return false;" class="button" name="enviar" type="submit" value="Cadastrar">CADASTRAR USUÁRIO</button>
    
  </form>

  <?php 
    include "../php/rodape.php"; 
  ?>

</body>
</html>