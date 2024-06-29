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
<link rel='stylesheet' type='text/css' href='../css/exibirregistrousuario.css' />
<title>Scale</title>
</head>

<body>

<div align="center">
<table width="490px" border="0">
  <tr>
    <td><table width="auto" id="linkborda">
  <tr>
    <td width="auto"></td>
    <td id="linkpag" width="auto"><a id="linkpag" href="../sec/sec_tipo.php">INICIAL</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a id="linkpag" style="text-decoration:none" href="../administracao.php">ADMINISTRACAO</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a id="linkpag" href="inicialusuario.php">USUÁRIOS</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a id="linkpag" href="registrousuario.php">REGISTROS</a>&nbsp;&nbsp;/</td>
    <td width="auto" id="linkatual">EXIBIR</td>
  </tr>
</table></td>
  </tr>
    <tr>
    <td align="center"><div class="boxform" >
    <p>
    <b>EXIBIR REGISTRO DO USUÁRIO</b>
    </p>
    
<?php

$id = $_GET['id'];

$sqlc = "SELECT * FROM registrousuario WHERE id='$id'"; //faz a busca com as palavras enviadas
$result = $conn->query($sqlc);
$dados = $result->fetch_assoc();



$login = $dados["login"];
$senha = $dados["senha"];
$nome = $dados["nome"];
$rg = $dados["rg"];
$rgorgao = $dados["rgorgao"];
$rguf = $dados["rguf"];
$email = $dados["email"];
$nivelusuario = $dados["nivel"];
$ativousuario = $dados["ativo"];
$gerasenha = $dados["gerasenha"];
$horario = $dados["horario"];
$dia = $dados["dia"];
$semana = $dados["semana"];
$mes = $dados["mes"];
$ano =$dados["ano"];
$operador = $dados["operador"];

?>

		
         <div align="center">   
		<table border="1" width="40%">
        <tbody>
        <tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">ID:</font></td>
                <td width="90%" align="left"><?php echo  $dados['id_usuario']; ?></td>
            </tr>
        <tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">Login:</font></td>
                <td width="90%" align="left"><input type="text" readonly name="login" size="50" id="login" value="<?php echo $dados["login"]; ?>" /></td>
            </tr>
            <tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">Senha:</font></td>
                <td width="90%" align="left"><?php echo $criptografada; ?></td>
            </tr>
            <tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">Nome:</font></td>
                <td width="90%" align="left"><input type="text" readonly name="nome" size="50" id="nome" value="<?php echo $dados["nome"]; ?>" /></td>
            </tr>	
          
 <!--       <tr>
		      <td width="10%" style='background-color:rgba(70,130,180,0.7)' align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">RG:</font></td>
              <td width="90%" style="left">
                  <table width="200" border="0">
                    <tr>
                      <td><input type="text" readonly name="rg" size="13" id="rg" onKeyPress="return SomenteNumero(event);" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $dados["rg"]; ?>" /></td>
                      <td width="6%" style='background-color:rgba(70,130,180,0.7)' align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">ORGÃO:</font></td>
                      <td><input type="text" readonly name="rgorgao" size="7" id="rgorgao" onKeyPress="return SomenteLetra(event);" onKeyUp="this.value = this.value.toUpperCase();" onBlur="this.value = this.value.toUpperCase();" value="<?php echo $dados["rgorgao"]; ?>" /></td>
                      <td width="6%" style='background-color:rgba(70,130,180,0.7)' align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">UF:</font></td>
                      <td><input type="text" readonly name="rguf" size="5" id="rguf" onKeyPress="return SomenteLetra(event);" onKeyUp="this.value = this.value.toUpperCase();" onBlur="this.value = this.value.toUpperCase();" value="<?php echo $dados["rguf"]; ?>" /></td>
                    </tr>
                </table></td>                
            </tr>			
-->			<tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">RG:</font></td>
                <td width="90%" align="left"><input type="text" readonly name="rg" size="50" id="rg" value="<?php echo $dados["rg"]; ?>" /></td>
            </tr>
			<tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">Email:</font></td>
                <td width="90%" align="left"><input type="text" readonly name="email" size="50" id="email" value="<?php echo $dados["email"]; ?>" /></td>
            </tr>
            <tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">Telefone:</font></td>
                <td width="90%" align="left"><input type="text" readonly name="telefone" size="50" id="telefone"  class="inputcssn" title="Digite o celular" maxlength="16" onKeyPress="Mascaracelular(this); return SomenteNumero(event);" value="<?php echo $dados["telefone"]; ?>" /></td>
            </tr>
<!-- 		<tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">Cargo:</font></td>
                <td width="90%" align="left"><input type="text" readonly name="email" size="50" id="email" value="<?php echo $dados["cargo"]; ?>" /></td>
            </tr>
			<tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">Departamento:</font></td>
                <td width="90%" align="left"><input type="text" readonly name="email" size="50" id="email" value="<?php echo $dados["departamento"]; ?>" /></td>
            </tr>
-->         <tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">Nível:</font></td>
                <td width="90%" align="left"><?php if ( $nivelusuario == 1 ) 
{
echo "Usuário";
}
if ( $nivelusuario == 2 ) 
{
echo "Gestor";
}
if ( $nivelusuario == 3 ) 
{
echo "Admin";
}
?>
</td>
            </tr> 			
            <tr>
				<td width="10%" style="background-color:rgba(70,130,180,0.7)" align="right" style="text-shadow: #000 1px 1px 4px;"><font color="#FFFFFF">Status:</font></td>
                <td width="90%" align="left">
<?php if ( $ativousuario == 1 ) 
{
echo "Ativo";
}
if ( $ativousuario == 0 ) 
{
echo "Desativado";
}
?>
</td>
            </tr> 
           </tbody>
    </table>	
	<br />
	<?php if ( $gerasenha == 1 ){
echo "<table style='border-radius:8px; background-color:rgba(70,130,180,0.7)' cellpadding='5px'>
		<tr>
			<td>
				<font color='#FFFFFF'  style='font-weight:bold;font-family: Verdana, Geneva, sans-serif;font-size:12px'>FOI GERADA UMA NOVA SENHA PELO OPERADOR</font>
			</td>
		</tr>
	  </table>";
}
elseif ( $gerasenha == 2 )
{
echo "<table style='border-radius:8px; background-color:rgba(70,130,180,0.7)' cellpadding='5px'>
		<tr>
			<td>
				<font color='#FFFFFF'  style='font-weight:bold;font-family: Verdana, Geneva, sans-serif;font-size:12px'>FOI GERADA UMA NOVA SENHA PELO USUÁRIO</font>
			</td>
		</tr>
	  </table>";
}
elseif ( $gerasenha == 3 )
{
echo "<table style='border-radius:8px; background-color:rgba(70,130,180,0.7)' cellpadding='5px'>
		<tr>
			<td>
				<font color='#FFFFFF'  style='font-weight:bold;font-family: Verdana, Geneva, sans-serif;font-size:12px'>FOI CRIADO O USUÁRIO</font>
			</td>
		</tr>
	  </table>";
}
elseif ( $gerasenha == 4 )
{
echo "<table style='border-radius:8px; background-color:rgba(70,130,180,0.7)' cellpadding='5px'>
		<tr>
			<td>
				<font color='#FFFFFF'  style='font-weight:bold;font-family: Verdana, Geneva, sans-serif;font-size:12px'>FOI ALTERADO O USUÁRIO</font>
			</td>
		</tr>
	  </table>";
}
?>
<br />
  <table width="640px" cellpadding="2px" cellspacing="2px" border="0">
  <tr>
    <td align="left"><b>Data:</b><?php echo " $horario, $dia de $mes de $ano";?></td>
    <td align="right"><b>Operador:</b><?php echo " $operador";?></td>
  </tr> 	
</table>
<br />
    </td>
  </tr>
</table>
</div>

<div id="rodape">
<table width="100%" border="0" valign="bottom">
    <tr valign="bottom">
      <td align="left" valign="bottom">
        Produto Ativo por <?php include "../sec/data.php"; echo "<strong>".$dias."</strong> dias";?>
      </td>
      <td align="right" valign="bottom"> 
      <div style="margin-top:6px; margin-right:20px;"><font size="-4" color="#009900">V1.0 - 2024 | desenvolvido por</font> <font color="#009900"><font color="#009900">@WeAnt</font></div>
      </td>
    </tr> 
</table> 
</div>

</body>
</html>