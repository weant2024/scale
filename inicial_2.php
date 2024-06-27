<!DOCTYPE html>
<?php
include "sec/config.php"; 
include "sec/sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sec/sec_tipo.php"); exit;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Scale</title>
</head>

<body>

Aqui é o conteúdo da página inicial 2 (Gestor)

<a href="usuario/inicialusuario.php">Inicial Usuário</a>

</body>
</html>