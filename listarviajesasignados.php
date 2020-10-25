<?php



	$consulta="SELECT * FROM acercarlogistca.viaje where Chofer_idChofer!=0;";
	$resultado=db_query($consulta);

	$color='';
	$comision='';

	foreach($resultado as $fila){


		switch ($fila['estado']) {
			case 'ASIGNADO':
				$color='style="color:#088A68";';
				break;
			case 'EN CURSO':
				$color='style="color:#BF00FF";';
				break;
			case 'FINALIZADO':
				$color='style="color:#E9A317";';
				break;
			default:
				$color='';
				break;
		}
		
		if ($fila['comisionPaga']==1) {
			$comision='Si';
		} else {
			$comision='No';
		}
		


		echo "<tr ".$color.">
		<td>"."<input type='checkbox' value='"."$fila[idViaje]"."'>"."</td>
		<td>"."$fila[idViaje]"."</td>
		<td>"."$fila[fecha]"."</td>
		<td>"."$fila[hora]"."</td>
		<td>"."$comision"."</td>
		<td>"."$fila[valorViaje]"."</td>
		<td>"."$fila[Servicio_idServicio]"."</td>
		<td>"."$fila[Chofer_idChofer]"."</td>
		<td>"."$fila[idClliente]"."</td>
		<td>"."$fila[km]"."</td>
		<td>"."$fila[fecha_carga]"."</td>
		<td>"."$fila[estado]"."</td>
		</tr>";


	}

?>