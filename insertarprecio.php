<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$lista= $_POST['listaP']; 
$tipo= $_POST['tipo']; 
$servicio= $_POST['servicio'];
$fijo= $_POST['fijo'];
$hora= $_POST['hora'];
$km= $_POST['km'];



	$consulta="INSERT INTO precio
		(idTipoVehiculo,valorkm,valorFijo,valorHora,idServicio,lista)
		VALUES(".$tipo.",".$km.",".$fijo.",".$hora.",".$servicio.",".$lista.");";
	$resultado=db_query($consulta);



?>