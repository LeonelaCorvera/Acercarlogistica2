<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$ids= $_POST['ids'];
$chofer= $_POST['chofer'];

	$consulta="UPDATE viaje SET Chofer_idChofer =".$chofer." WHERE idViaje in(".$ids.");";
	$resultado=db_query($consulta);

	header("Location: index.php?menu=AsignarSolicitud");

?>
