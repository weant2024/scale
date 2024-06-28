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
<script type="text/javascript" src="../js/celddd.js"></script>
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
if(document.contato.rg.value=="") {
alert("Digite o RG do usuário");
document.contato.rg.focus();
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
        <b>EDITAR USUÁRIO</b>
    </p>
    
<?php

$id = $_GET['id'];

$sqlc = "SELECT * FROM usuario WHERE id='$id'"; //faz a busca com as palavras enviadas
$query = $conn->query($sqlc);
$dados = $query->fetch_assoc();

$login = $dados["login"];
$senha = $dados["senha"];
$nome = $dados["nome"];
$rg = $dados["rg"];
$rgorgao = $dados["rgorgao"];
$rguf = $dados["rguf"];
$matricula = $dados["matricula"];
$email = $dados["email"];
$cargo = $dados["cargo"];
$departamento = $dados["departamento"];
$nivelusuario = $dados["nivel"];
$ativousuario = $dados["ativo"];
$horario = $dados["horario"];
$dia = $dados["dia"];
$semana = $dados["semana"];
$mes = $dados["mes"];
$ano =$dados["ano"];
$operador = $_SESSION["UsuarioLogin"];

$sqlc1 = "SELECT * FROM registroequipamento WHERE operador='$operador'"; //faz a busca com as palavras enviadas
$query1 = $conn->query($sqlc1);
$dados1 = $query1->fetch_assoc();


?>

	<form id="contato" align="center" method='post' name="contato" action="../sec/atualizarusuario.php?id=<?php echo $id;?>"  onsubmit="return validar();">   
			
         <div align="center">   
		<table border="1" width="40%">
        <tbody>
        <tr>
				<td width="6%" style="background-color:rgba(70,130,180,0.7)" align="right" ><font color="#FFFFFF">ID:</font></td>
                <td width="94%" align="left"><?php echo  $dados['id']; ?></td>
            </tr>
        <tr>
				<td width="6%" style="background-color:rgba(70,130,180,0.7)" align="right" ><font color="#FFFFFF">Login:</font></td>
                <td width="94%" align="left"><input type="text" name="login" id="login" onKeyPress="return SomenteLetra(event)" value="<?php echo $dados["login"]; ?>" /></td>
            </tr>
            <tr>
				<td width="6%" style="background-color:rgba(70,130,180,0.7)" align="right" ><font color="#FFFFFF">Senha:</font></td>
                <td width="94%" align="left"><?php echo $criptografada; ?></td>
            </tr>
            <tr>
				<td width="6%" style="background-color:rgba(70,130,180,0.7)" align="right" ><font color="#FFFFFF">Nome:</font></td>
                <td width="94%" align="left"><input type="text" name="nome" id="nome" onKeyPress="return SomenteLetra(event)" value="<?php echo $dados["nome"]; ?>" /></td>
            </tr>	
          
		<tr>
				<td width="6%" style="background-color:rgba(70,130,180,0.7)" align="right" ><font color="#FFFFFF">RG:</font></td>
                <td width="94%" align="left"><input type="text" name="rg" id="rg" value="<?php echo $dados["rg"]; ?>" /></td>
            </tr>
			<tr>
				<td width="6%" style="background-color:rgba(70,130,180,0.7)" align="right" ><font color="#FFFFFF">Email:</font></td>
                <td width="94%" align="left"><input type="text" name="email" id="email" value="<?php echo $dados["email"]; ?>" /></td>
            </tr>
            <tr>
				<td width="6%" style="background-color:rgba(70,130,180,0.7)" align="right" ><font color="#FFFFFF">Telefone:</font></td>
                <td width="94%" align="left"><input type="text" name="telefone" id="telefone"  title="Digite o celular" maxlength="16" onKeyPress="Mascaracelular(this); return SomenteNumero(event);" value="<?php echo $dados["telefone"]; ?>" /></td>
            </tr>
         <tr>
				<td width="6%" style="background-color:rgba(70,130,180,0.7)" align="right" ><font color="#FFFFFF">Nível:</font></td>
                <td width="94%" align="left"><select name="nivelusuario" id="nivelusuario">
<option <?php if ( $nivelusuario == 1 ) 
{
echo "selected";
}
else 
{
echo "";
}
?> value="1">Usuário</option>
<option <?php if ( $nivelusuario == 2 ) 
{
echo "selected";
}
else 
{
echo "" ;
}
?> value="2">Gestor</option>
<option <?php if ( $nivelusuario == 3 ) 
{
echo "selected";
}
else 
{
echo "" ;
}
?> value="3">Admin</option>
</select>
</td>
            </tr> 
            <tr>
				<td width="6%" style="background-color:rgba(70,130,180,0.7)" align="right" ><font color="#FFFFFF">Status:</font></td>
                <td width="94%" align="left">
<select name="ativousuario" id="ativousuario">
<option <?php if ( $ativousuario == 1 ) 
{
echo "selected";
}
else 
{
echo "" ;
}
?> value="1">Ativo</option>
<option <?php if ( $ativousuario == 0 ) 
{
echo "selected";
}
else 
{
echo "" ;
}
?> value="0">Desativado</option>
</select>
</td>
            </tr> 
           </tbody>
    </table>	
	<br /> 
    <table border="0" width="40%">   
  <tr><br /> 
				<td width="50%" align="left" valign="top">
				<button type="submit" onClick="submitbutton( this.form );return false;" name="enviar" type="submit" value="cadastrar">EDITAR USUÁRIO</button>    
</form></td>
                <td width="50%" align="right" valign="top">
<form id="gerar" align="center" method='post' name="gerar" action="../sec/enviarsenhausuario.php?id=<?php echo $id;?>">
<input type="hidden" name="login" id="login" value="<?php echo $dados["login"]; ?>" />
<input type="hidden" name="senha" id="senha" value="<?php echo $dados["senha"]; ?>" />
<input type="hidden" name="nome" id="nome" value="<?php echo $dados["nome"]; ?>" />
<input type="hidden" name="rg" id="rg" value="<?php echo $dados["rg"]; ?>" />
<input type="hidden" name="rgorgao" id="rgorgao" value="<?php echo $dados["rgorgao"]; ?>" />
<input type="hidden" name="rguf" id="rguf" value="<?php echo $dados["rguf"]; ?>" />
<input type="hidden" name="email" id="email" value="<?php echo $dados["email"]; ?>" />
<input type="hidden" name="telefone" id="telefone" value="<?php echo $dados["telefone"]; ?>" />
<input type="hidden" name="nivelusuario" id="nivelusario" value="<?php echo $dados["nivel"]; ?>" />
<input type="hidden" name="ativousuario" id="ativousuario" value="<?php echo $dados["ativo"]; ?>" />
<button type="submit" name="gerarsenha" value="gerarsenhausuar">GERAR SENHA</button>
</form>
</td>
            </tr> 
           
    </table>	
	<br /> 
 <b>HISTÓRICO DO USUÁRIO</b>

<table width="100%" border="0">
	<tr width="100%" bgcolor="#CECECE">	
		<td width="37%"><b>Operador</b></td> 			
		<td width="10%"><b>Horário</b></td>
        <td width="5%"><b>Dia</b></td>
        <td width="20%"><b>Mês</b></td>
        <td width="5%"><b>Ano</b></td>
        <td width="8%"></td>
    </tr>
    <?php

$search = @$_POST['search'];
$search1 = @$_POST['search1'];
$search2 = @$_POST['search2'];


$busca_query1 = "SELECT * FROM registrousuario WHERE login='$login' ORDER BY horario,dia,mes,ano DESC";//faz a busca com as palavras enviadas
$result = $conn->query($busca_query1);


if (empty($result)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}

// quando existir algo em '$busca_query' ele realizará o script abaixo.
while ($dados1 = $result->fetch_assoc()) {
?>

	<tr width="100%">		
		<td width="37%"><?php echo "$dados1[operador]<br />";?></td>       
        <td width="10%"><?php echo "$dados1[horario]<br />";?></td>
		<td width="5%"><?php echo "$dados1[dia]<br />";?></td>	
        <td width="20%"><?php echo "$dados1[mes]<br />";?></td>
        <td width="5%"><?php echo "$dados1[ano]<br />";?></td>
        <td width="8%"><a href="../usuario/exibirregistrousuario.php?id=<?php echo $dados1['id'];?>">DETALHAR</a></td>		
	</tr>
<?php
}
?>
<br /> 

    
    </td>
  </tr>
</table>    
    </td>
  </tr>
</table>
</div> 

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

</body>
</html>