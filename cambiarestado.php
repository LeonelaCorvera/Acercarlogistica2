<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$ids= $_POST['ids'];
$estado= $_POST['estado'];
	

	if ($fila['estado']=='ASIGNADO') {

		$consulta="UPDATE viaje SET estado ='".$estado."' WHERE idViaje in(".$ids.");";
		$resultado=db_query($consulta);

	} else if ($fila['estado']=='EN CURSO'){

		$consulta="SELECT idChofer FROM chofer c join viaje v on v.Chofer_idChofer=c.idChofer where idViaje in (".$ids.");";
		$choferes=db_query($consulta);

		$consulta2="UPDATE viaje SET estado ='".$estado."' WHERE idViaje in(".$ids.");";
		$resultado2=db_query($consulta2);

		$consulta3="UPDATE chofer
				SET disponibilidad = -1,
				fecha_ultima_disponibilidad = now(),
				WHERE idChofer in (".$choferes.");";

		$resultado3=db_query($consulta3);

	} else if ($fila['estado']=='FINALIZADO'){

		$consulta="SELECT idChofer FROM chofer c join viaje v on v.Chofer_idChofer=c.idChofer where idViaje in (".$ids.");";
		$choferes=db_query($consulta);

		$consulta2="UPDATE viaje SET estado ='".$estado."' WHERE idViaje in(".$ids.");";
		$resultado2=db_query($consulta2);

		$consulta3="UPDATE chofer
				SET disponibilidad = 1,
				fecha_ultima_disponibilidad = now(),
				viaje_en_curso = 0
				WHERE idChofer in (".$choferes.");";

		$resultado3=db_query($consulta3);

	}
	


	$resultado=db_query($consulta);


?>
