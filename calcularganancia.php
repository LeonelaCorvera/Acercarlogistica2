<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$desde = (isset($_POST['desde'])) ? $_POST['desde'] : "0000-00-00" ;
$hasta = (isset($_POST['hasta'])) ? $_POST['hasta'] : "0000-00-00" ;

	$consulta="SELECT * FROM acercarlogistca.viaje where fecha between '".$desde."' and '".$hasta."';";
	$resultado=db_query($consulta);

	$array=[];

	foreach($resultado as $fila){


		$array[]="<tr>
		<td>"."$fila[idViaje]"."</td>
		<td>"."$fila[fecha]"."</td>
		<td>"."$fila[hora]"."</td>
		<td>"."$fila[comisionPaga]"."</td>
		<td>"."$fila[Servicio_idServicio]"."</td>
		<td>"."$fila[Chofer_idChofer]"."</td>
		<td>"."$fila[idClliente]"."</td>
		<td>"."$fila[valorViaje]"."</td>
		</tr>";


	}

	echo json_encode($array);


?>