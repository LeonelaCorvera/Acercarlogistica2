<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$id= $_POST['id']; 
$nombre= $_POST['nombre']; 
$apellido= $_POST['apellido']; 
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$vehiculo = $_POST['vehiculo'];


	$consulta="select * from chofer where idChofer=".$id.";";
	$resultado=db_query($consulta);


	$consulta2="";
	$cons="UPDATE chofer SET ";
	$tex="";
	$param=0;

	foreach($resultado as $fila){


		if ($fila['nombre']!=$nombre) {
			$tex=" nombre='".$nombre."'";
			$param++;
		} if ($fila['Apellido']!=$apellido) {
			$tex .= ($param==1) ? " ,Apellido='".$apellido."'" : " Apellido='".$apellido."'" ;
			$param++;
		} if ($fila['dni']!=$dni) {
			$tex .= ($param>0) ? " ,dni='".$dni."'" : " dni='".$dni."'" ;
			$param++;
		} if ($fila['telefono']!=$telefono) {
			$tex .= ($param>0) ? " ,telefono='".$telefono."'" : " telefono='".$telefono."'" ;
			$param++;
		} if ($fila['idVehiculo']!=$vehiculo) {
			$tex .= ($param>0) ? " ,idVehiculo='".$vehiculo."'" : " idVehiculo='".$vehiculo."'" ;
			$param++;
		} if ($tex!="") {
			$tex.=" where idChofer=".$id;
			$consulta2=$cons.$tex;
		}
	}


	if ($consulta2!="") {
		$resultado2=db_query($consulta2);
	} 


	header("Location: index.php?menu=ListadoChoferes");

?>