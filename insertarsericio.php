<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$des= $_POST['des']; 



	$consulta="INSERT INTO servicio(descripcion)VALUES('".$des."');";
	$resultado=db_query($consulta);

	header("Location: index.php?menu=ListadoServicios");

?>