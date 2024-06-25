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

<title>Scale</title>
</head>

<body>

	<p>
    	<b>PESQUISA DE USUÁRIOS</b>
    </p>

<form action="" method="post">
	<table width="auto"> 
		<tr>
			<td align="center" bgcolor="#CECECE">ID</td>
			<td align="center" bgcolor="#CECECE">Login</td>
			<td align="center" bgcolor="#CECECE">Nome</td>
			<td align="center" bgcolor="#CECECE">RG</td>
			<td align="center" bgcolor="#CECECE">Nível</td>
			<td align="center" bgcolor="#CECECE">Status</td>
			<td align="center"></td>
		</tr>
		<tr>
			<td><input type="text" name="palavra" size="9" id="palavra"/></td>
			<td><input type="text" name="palavra1" size="9"  id="palavra1"/></td>
			<td><input type="text" name="palavra2" size="9"  id="palavra2"/></td>
			<td><input type="text" name="palavra3" size="9"  id="palavra3"/></td>
			<td><input type="text" name="palavra4" size="9" id="palavra4"/></td>
			<td><input type="text" name="palavra5" size="9" id="palavra5"/></td>
			<td><input type="submit" Value="Pesquisar" /></td>
		</tr>
	<table width="auto"> 
</form>
<br />
<table width="100%" border="0">
	<tr width="100%" bgcolor="#CECECE">	
		<td width="3%"><b>ID</b></td> 
        <td width="18%"><b>Login</b></td> 
		<td width="37%"><b>Nome</b></td> 	
        <td width="16%"><b>RG</b></td> 
        <td width="12%"><b>Nível</b></td>
        <td width="10%"><b>Status</b></td>
		<td width="4%"><a href="exportar_excel_pesquisa.php"><button type='button'>Exportar</button></a></td> 
    </tr>
    <?php

$busca = @$_POST['palavra'];
$busca1 = @$_POST['palavra1'];
$busca2 = @$_POST['palavra2'];
$busca3 = @$_POST['palavra3'];
$busca4 = @$_POST['palavra4'];
$busca5 = @$_POST['palavra5'];

$busca_query = "SELECT * FROM usuario WHERE id LIKE '%$busca%' AND login LIKE '%$busca1%' AND nome LIKE '%$busca2%' AND rg LIKE '%$busca3%' AND pnivel LIKE '%$busca4%' AND pativo LIKE '%$busca5%' ORDER BY nome ASC";
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
$pnivelusuario = $dados["pnivel"];
?>

	<tr width="100%">	
		<td width="3%"><?php echo "$dados[id]<br />";?></td>		
		<td width="18%"><?php echo "$dados[login]<br />";?></td>	
		<td width="37%"><?php echo "$dados[nome]<br />";?></td>
        <td width="16%"><?php echo "$dados[rg]<br />";?></td>
        <td width="10%"><?php if ( $dados["pnivel"] == 'Usuario' ) {
			echo "Usuário";
		}
		elseif ( $dados["pnivel"] == 'Tecnico' ) {
			echo "Técnico";
		}
		elseif ( $dados["pnivel"] == 'Administrador' ) {
			echo "Administrador";
		}		
		?>						  
			</td>
        <td width="11%" align="center"><?php echo "$dados[pativo]<br />";?>	</td>
      	<td width="4%"  align="center"><a class="texteditar" href="editarusuario.php?id=<?php echo $dados['id'] ?>">DETALHAR</a></td>		
	</tr>	
<?php
}
?>	
</table>
</td>
  </tr>
</table>
<br />
<br />

<?php include "../php/rodape.php";?>

</body>
</html>