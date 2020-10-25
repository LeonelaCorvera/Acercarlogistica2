<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$dni= $_POST['dni'];
$telefono= $_POST['telefono'];
$vehiculo= $_POST['vehiculo'];


	$consulta="INSERT INTO chofer(nombre,Apellido,dni,telefono,idVehiculo)VALUES('".$nombre."','".$apellido."','".$dni."','".$telefono."','".$vehiculo."');";
	
	$resultado=db_query($consulta);


	header("Location: index.php?menu=NuevoChofer");

?>