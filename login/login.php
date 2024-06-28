<head>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Scale</title>

<?php
 session_start(); // Inicia a sessão
 session_destroy(); // Destrói a sessão limpando todos os valores salvos

include "../sec/config.php"; 
include "../sec/data.php"; 

if ($dias < 1){
	header ("Location: ../php/pagamento.php"); exit;
}

?>
</head>

<body>

<form method="post" action="../sec/sec_valida.php">
<input type="text" style="text-align:center" name="login" id="login" maxlength="50" class="input-inicial" onFocus="if(this.value == 'USUARIO') this.value = '';" onBlur="if(this.value=='') this.value='USUARIO';" value="USUARIO" />
<br />
<input type="password" style="text-align:center" name="senha" id="senha" maxlength="50" class="inputbox required; input-inicial" onFocus="if(this.value == 'SENHA') this.value = '';" onBlur="if(this.value=='') this.value='SENHA';" value="SENHA" />
<br />
<input type="submit" value="Entrar" class="button" />
</form> 
    <br />
    <br />
    Produto Ativo por <?php echo "<strong>".$dias."</strong> dias";?>
   <div style="margin-top:6px; margin-right:20px;"><font size="-4" color="#009900"> V1.0 - 2024 | desenvolvido por</font> <font color="#009900"><a style="text-decoration:none"><font color="#009900">@WeAnt</a></font></div>
</body>
</html>