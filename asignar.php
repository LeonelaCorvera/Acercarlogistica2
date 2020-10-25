<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$ids= $_POST['ids'];
$chofer= $_POST['chofer'];

	$consulta="UPDATE viaje SET Chofer_idChofer =".$chofer.",estado ='ASIGNADO' WHERE idViaje in(".$ids.");";
	$resultado=db_query($consulta);

	$consulta2="UPDATE chofer
				SET disponibilidad = 1,
				fecha_ultima_disponibilidad = now(),
				WHERE idChofer = ".$chofer.";";

	$resultado2=db_query($consulta2);

	header("Location: index.php?menu=AsignarSolicitud");

?>
