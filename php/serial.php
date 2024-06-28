<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 include "../sec/info.php";
 include "../sec/config.php";
 include "../sec/data.php"; 
 
if ($dias >= 1){
	header ("Location: ../login/login.php"); exit;
}
?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' type='text/css' href='../css/geral.css' />
<title>AlohaTI eGTI</title>
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
    <b>WeAnt Scale</b>
    </p>
    <br />
    <table width="100px" border="0">
      <tr>
        <td><img class="imagemheldesk" src="img/helpdesk.png"></td>
        <td><form method="get" action="sec/sec_verificaserial.php?serialcliente=<?php echo "$serialcliente" ?>">
<input type="text" name="serialcliente" id="serialcliente" size="30" maxlength="30" class="inputbox required; inputbox" onFocus="if(this.value == 'SERIAL') this.value = '';" onBlur="if(this.value=='') this.value='SERIAL';" value="SERIAL" />
<br />
<input type="submit" value="Confirma" />
</form>    </td>
      </tr>
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
   <div style="margin-top:6px; margin-right:20px;"><font size="-4" color="#009900">desenvolvido por</font> <font color="#009900"><a style="text-decoration:none" target="_Blank" href="https://www.facebook.com/natotheend"><font color="#009900">Alessandro Albuquerque</a></font></div>
  </td>
 </tr> 
</table> 
  </div>
</body>
</html>