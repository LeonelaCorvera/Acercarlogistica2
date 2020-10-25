<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$usuario= $_POST['usuario']; 
$pass= $_POST['pass'];
$perfil= $_POST['perfil'];
$cliente= $_POST['cliente'];

	$consulta="INSERT INTO usuario(idusuario,contrasena,flagBaja,id_perfil,id_cliente)VALUES('".$usuario."',".$pass.",1,".$perfil.",".$cliente.");";
	$resultado=db_query($consulta);

	header("Location: index.php?menu=NuevoCliente");

?>