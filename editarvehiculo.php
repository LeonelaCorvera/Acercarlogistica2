<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$id= $_POST['id']; 
$patente= $_POST['patente']; 
$marca= $_POST['marca']; 
$modelo = $_POST['modelo'];
$anio = $_POST['anio'];
$tipo = $_POST['tipo'];
$seguro = ($_POST['seguro']=='Si') ? 1 : 0 ;


	$consulta="select * from vehiculo where idVehiculo=".$id.";";
	$resultado=db_query($consulta);


	$consulta2="";
	$cons="UPDATE vehiculo SET ";
	$tex="";
	$param=0;

	foreach($resultado as $fila){


		
		if ($fila['patente']!=$patente) {
			$tex=" patente='".$patente."'";
			$param++;
		} if ($fila['marca']!=$marca) {
			$tex .= ($param==1) ? " ,marca='".$marca."'" : " marca='".$marca."'" ;
			$param++;
		} if ($fila['modelo']!=$modelo) {
			$tex .= ($param>0) ? " ,modelo='".$modelo."'" : " modelo='".$modelo."'" ;
			$param++;
		} if ($fila['anio']!=$anio) {
			$tex .= ($param>0) ? " ,anio='".$anio."'" : " anio='".$anio."'" ;
			$param++;
		} if ($fila['idTipoDeVehiculo']!=$tipo) {
			$tex .= ($param>0) ? " ,idTipoDeVehiculo='".$tipo."'" : " idTipoDeVehiculo='".$tipo."'" ;
			$param++;
		} if ($fila['seguroAlDia']!=$seguro) {
			$tex .= ($param>0) ? " ,seguroAlDia='".$seguro."'" : " seguroAlDia='".$seguro."'" ;
			$param++;
		} if ($tex!="") {
			$tex.=" where idVehiculo=".$id;
			$consulta2=$cons.$tex;
		}
	}


	if ($consulta2!="") {
		$resultado2=db_query($consulta2);
	} 


	header("Location: index.php?menu=ListadoVehiculos");

?>