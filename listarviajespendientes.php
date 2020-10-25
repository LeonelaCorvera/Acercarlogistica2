<?php



	$consulta="SELECT * FROM acercarlogistca.viaje where Chofer_idChofer=0 and estado='PENDIENTE';";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){


		echo "<tr>
		<td>"."<input type='checkbox' value='"."$fila[idViaje]"."'>"."</td>
		<td>"."$fila[idViaje]"."</td>
		<td>"."$fila[fecha]"."</td>
		<td>"."$fila[hora]"."</td>
		<td>"."$fila[comisionPaga]"."</td>
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