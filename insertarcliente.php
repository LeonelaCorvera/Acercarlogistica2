<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$razon= $_POST['razon'];
$contacto= $_POST['contacto'];
$doc= $_POST['doc'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];
$tipo= $_POST['tipo'];
$lista= $_POST['lista'];

	$consulta="INSERT INTO cliente(razon_social,contacto,doc,direccion,telefono,tipoDoc,listaPrecio,estado)
	VALUES('".$razon."','".$contacto."',".$doc.",'".$direccion."','".$telefono."','".$tipo."',".$lista.",'PENDIENTE');";
	$resultado=db_query($consulta);

	header("Location: index.php?menu=NuevoCliente");

?>
