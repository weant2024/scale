<!DOCTYPE html>
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
<link rel='stylesheet' type='text/css' href='../css/teste.css' />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Scale</title>
</head>

<body>

  <p align="center">
    <b>GESTÃO DE USUÁRIOS</b>
  </p>

  <table>
      <td width="25%" align="center"><form id="criarusuario" method="post" name="criarusuario" action="criarusuario.php"><button type="submit" name="criarusuario" value="criarusuario">Criar Usuário</button></form></td>
      <td width="25%" align="center"><form id="pesquisausuario" method="post" name="pesquisausuario" action="pesquisausuario.php"><button type="submit" name="pesquisausuario" value="pesquisausuario">Pesquisar Usuário</button></form></td>
      <td width="25%" align="center"><form id="registrousuario" method="post" name="registrousuario" action="registrousuario.php"><button type="submit" name="registrousuario" value="registrousuario">Registro de Usuários</button></form></td>
      <td width="25%" align="center"><form id="logout" method="post" name="logout" action="../login/logout.php"><button type="submit" name="logout" value="logout">Logout</button></form></td>
    </tr>
  </table>

<?php
include "../php/rodape.php";
?>

  </body>
</html>