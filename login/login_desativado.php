<head>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' type='text/css' href='css/geral.css' />
<title>Scale</title>

<?php
 session_start(); // Inicia a sessão
 session_destroy(); // Destrói a sessão limpando todos os valores salvos

include "../sec/config.php"; 
include "../sec/data.php"; 

if ($dias < 1){
	header ("Location: ../sec/pagamento.php"); exit;
}

?>
</head>

<body>

<div align="center">
<table width="490px" border="0">
  <tr>
    <td></td>
  </tr>
    <tr>
    <td align="center"><div class="boxform-inicial" >
    <p>
    <b>Scale</b>
    </p>
    <br />
<form method="post" action="../sec/sec_valida.php">
<input type="text" style="text-align:center" name="login" id="login" maxlength="50" class="inputbox required; input-inicial" onFocus="if(this.value == 'USUARIO') this.value = '';" onBlur="if(this.value=='') this.value='USUARIO';" value="USUARIO" />
<br />
<input type="password" style="text-align:center" name="senha" id="senha" maxlength="50" class="inputbox required; input-inicial" onFocus="if(this.value == 'SENHA') this.value = '';" onBlur="if(this.value=='') this.value='SENHA';" value="LOGIN" />
<br />
<font id="linkdembranco">Login desativado!</font>
<br />
<input type="submit" value="Entrar" class="button" />
</form> 
    <br />
    <br />
</div> 
</div>
    </td>
  </tr>
</table>
<div id="rodape">
<table width="100%" border="0" valign="bottom">
 <tr valign="bottom">
  <td align="left" valign="bottom">
    Produto Ativo por <?php echo "<strong>".$dias."</strong> dias";?>
  </td>
  <td align="right" valign="bottom"> 
   <div style="margin-top:6px; margin-right:20px;"><font size="-4" color="#009900">desenvolvido por</font> <font color="#009900"><a style="text-decoration:none" target="_Blank" href="http://catalogoti/equipe"><font color="#009900">CSC TI</a></font></div>
  </td>
 </tr> 
</table> 
  </div>
</body>
</html>