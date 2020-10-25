<?php

$tipo= $_POST['tipo'];

	$consulta="SELECT idChofer,nombre,Apellido FROM chofer c join vehiculo v on c.idVehiculo=v.idVehiculo join tipodevehiculo tv on v.idTipoDeVehiculo=tv.idTipoDeVehiculo where flagBaja=1 and tv.idTipoDeVehiculo=".$tipo.";";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){


		echo "<tr>
		<td>"."<input type='radio' name='grupo' value='"."$fila[idChofer]"."'>"."</td>
		<td>"."$fila[idChofer]"."</td>
		<td>"."$fila[nombre]"." "."$fila[Apellido]"."</td>
		</tr>";


	}

?>