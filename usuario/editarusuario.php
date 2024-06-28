<?php
include "../sec/config.php"; 
include "../sec/sec_verifica.php";

$id = $_GET['id'];

if ( $nivel < 2 ) 
{
	header("Location: ../sec/sec_tipo.php"); exit;
}
if ( $nivel == 2 ) 
{
	header("Location: editarusuario_2.php?id=$id"); exit;
}
if ( $nivel == 3 ) 
{
	header("Location: editarusuario_3.php?id=$id"); exit;
}
?>
