<?php
 include "../sec/info.php";
 include "../sec/config.php";
 include "../sec/data.php"; 
 
if ($dias >= 1){
	header ("Location: ../sec/sec_tipo.php"); exit;
}
?> 

<head>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' type='text/css' href='../css/geral.css' />
<title>Scale</title>

</head>

<body>

<div align="center">
<table width="490px" border="0">
  <tr>
    <td></td>
  </tr>
    <tr>
    <td align="center"><div class="boxform" >
    <p>
    <b>WeAnt SCALE</b>
    </p>
    <br />
	<table width="auto" border="0">
      <tr>
        <td>
		<img src="img/favicon.png" width="64px" height="64px">
		</td>
		<td>
		 <span class="escritapagamento">
	<b>PRODUTO EXPIRADO,<br/>
    FAVOR ENTRAR EM CONTATO COM O ADMINISTRADOR</b>
		 </font>
		</td>
	  </tr>
	  <tr>
        <td></td>
		<td align="center">
	<a href="serial.php"><button class="button">JÁ RECEBEU O SERIAL?</button><br/> </a>
		</td>
	  </tr>	
	  <tr>
		<td></td>
		<td>
    <br />
<div align="center" id="escritaini">
<?php 

echo "Seu IP é $ipreal <br />";
echo "Seu navegador é $navegador <br />";
echo 'Sistema Operacional: ' . php_uname('s') . "<br />";
echo 'Nome do Host: ' . php_uname('n') . "<br />";
echo 'Versão do Release: ' . php_uname('r') . "<br />";
echo 'Versão do SO: ' . php_uname('v') . "<br />";
echo 'Tipo de Máquina: ' . php_uname('m') . "<br />";
echo "Seu produto expirou em $data_final";
?>
</div>
	  </tr>
		</td>
			</table>
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
    Produto Expirado
  </td>
  <td align="right" valign="bottom"> 
   <div style="margin-top:6px; margin-right:20px;"><font size="-4" color="#009900">desenvolvido por</font> <font color="#009900"><a style="text-decoration:none" target="_Blank" href="https://www.facebook.com/natotheend"><font color="#009900">Alessandro Almeida</a></font></div>
  </td>
 </tr> 
</table> 
  </div>
</body>
</html>