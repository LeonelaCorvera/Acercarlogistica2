<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


$json =$_POST['id']; 
$id = json_decode($json, true);

	$consulta="UPDATE vehiculo SET activo=0 where idVehiculo=".$id;
	$resultado=db_query($consulta);



?>