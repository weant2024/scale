<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "../sec/config.php"; 
include "../sec/sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: ../sec/sec_tipo.php"); exit;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' type='text/css' href='../css/registrousuario.css' />

<title>Scale</title>
</head>

<body>

<div align="center">
<table width="490px" border="0">
  <tr>
    <td><table width="auto" id="linkborda">
  <tr>
    <td width="auto"></td>
    <td id="linkpag" width="auto"><a id="linkpag" href="../login/sec/sec_tipo.php">INICIAL</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a id="linkpag" style="text-decoration:none" href="../administracao.php">ADMINISTRACAO</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a id="linkpag" href="inicialusuario.php">USUÁRIOS</a>&nbsp;&nbsp;/</td>
    <td width="auto" id="linkatual">REGISTRO</td>
  </tr>
</table></td>
  </tr>
    <tr>
    <td align="center"><div class="boxform" >
    <p>
    <b>REGISTRO DE USUÁRIOS</b>
    </p>
<form action="" method="post">
	<table width="auto"> 
		<tr>
			<td align="center" bgcolor="#CECECE">ID</td>
			<td align="center" bgcolor="#CECECE">Login</td>
			<td align="center" bgcolor="#CECECE">Nome</td>
			<td align="center" bgcolor="#CECECE">Dia</td>
			<td align="center" bgcolor="#CECECE">Mês</td>
			<td align="center" bgcolor="#CECECE">Nível</td>
			<td align="center" bgcolor="#CECECE">Status</td>
			<td align="center"></td>
		</tr>
		<tr>
			<td><input type="text" name="palavra" size="5" id="palavra"/></td>
			<td><input type="text" name="palavra1" size="10"  id="palavra1"/></td>
			<td><input type="text" name="palavra2" size="10"  id="palavra2"/></td>
			<td><input type="text" name="palavra3" size="10"  id="palavra3"/></td>
			<td><input type="text" name="palavra4" size="10" id="palavra4"/></td>
			<td><input type="text" name="palavra5" size="10" id="palavra5"/></td>
			<td><input type="text" name="palavra6" size="10" id="palavra6"/></td>
			<td><input type="submit" Value="Pesquisar" /></td>
		</tr>
	<table width="auto"> 
</form>	
<br />
<table width="100%" border="0" class="tabelacolorida">
	<tr width="100%" bgcolor="#CECECE">
		<td width="3%" class="texttable"><b>ID</b></td> 
        <td width="18%" class="texttable"><b>Login</b></td> 
		<td width="33%" class="texttable"><b>Nome</b></td> 	
        <td width="3%" class="texttable"><b>Dia</b></td> 
		<td width="10%" class="texttable"><b>Mês</b></td> 
        <td width="5%" class="texttable"><b>Ano</b></td>
        <td width="10%" class="texttable"><b>Nível</b></td>
		<td width="10%" class="texttable"><b>Status</b></td>
		<td width="4%" align="center"><a class='texteditar'href="exportar_excel_registro.php"><button type='button'>Exportar</button></a></td> 		
    </tr>
    <?php

$busca = @$_POST['palavra'];
$busca1 = @$_POST['palavra1'];
$busca2 = @$_POST['palavra2'];
$busca3 = @$_POST['palavra3'];
$busca4 = @$_POST['palavra4'];
$busca5 = @$_POST['palavra5'];
$busca6 = @$_POST['palavra6'];


$busca_query = "SELECT * FROM registrousuario WHERE id_usuario LIKE '%$busca%' AND login LIKE '%$busca1%' AND nome LIKE '%$busca2%' AND dia LIKE '%$busca3%' AND mes LIKE '%$busca4%' AND pnivel LIKE '%$busca5%' AND ativo LIKE '%$busca6%' ORDER BY id DESC";//faz a busca com as palavras enviadas
$result = $conn->query($busca_query);


if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}

// quando existir algo em '$busca_query' ele realizará o script abaixo.
while ($dados = $result->fetch_assoc()) {
?>

<?php 
@$statusdem = $dados["status"]; 
$nivelusuario = $dados["nivel"];
$ativousuario = $dados["ativo"];
?>

	<tr width="100%">	
		<td width="3%"><?php echo "$dados[id_usuario]<br />";?></td>		
		<td width="18%"><?php echo "$dados[login]<br />";?></td>	
		<td width="33%"><?php echo "$dados[nome]<br />";?></td>
        <td width="3%"><?php echo "$dados[dia]<br />";?></td>
        <td width="10%"><?php echo "$dados[mes]<br />";?></td>	
		<td width="5%"><?php echo "$dados[ano]<br />";?></td>	
        <td width="10%"><?php if ( $nivelusuario == 1 ) {
			echo "Usuário";
		}
		elseif ( $nivelusuario == 2 ) {
			echo "Gestor";
		}
		elseif ( $nivelusuario == 3 ) {
			echo "Admin";
		}		
		?>					  
			</td>
        <td width="10%" align="center"><?php if ( $ativousuario == 0 ) {
			echo "Desativado";
		}
		elseif ( $ativousuario == 1 ) {
			echo "Ativado";
		}
		?>	</td>
      	<td width="4%"  align="center">
			<?php
			$nivel = $_SESSION['UsuarioNivel']; 
			if ($nivel > 2) {
				echo '<a class="texteditar" href="exibirregistrousuario.php?id=' . $dados['id'] . '">DETALHAR</a>';
			}
			?>
      	</td>		
	</tr>	
<?php
}
?>	
</table>
</td>
  </tr>
</table>
</div> 
</div>
<br />
<br />
<div id="rodape">
<?php include "../php/rodape.php";?>
</div>
</body>
</html>