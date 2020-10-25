
<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

 $chofer= ( empty($_POST['chofer']) ) ? NULL : $_POST['chofer'];

	$consulta="UPDATE chofer
				SET disponibilidad = 1,
				fecha_ultima_disponibilidad = now(),
				viaje_en_curso = 0
				WHERE idChofer = ".$chofer.";";

	$resultado=db_query($consulta);


?>