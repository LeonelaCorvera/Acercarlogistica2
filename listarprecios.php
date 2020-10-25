<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$lista = (isset($_POST['lista'])) ? $_POST['lista'] : "0" ;

	$consulta="SELECT p.id, 
				s.descripcion as servicio,
				tp.descripcion as tipovehiculo, 
				valorkm, 
				valorFijo, 
				valorHora 
				FROM precio p 
				left join tipodevehiculo tp on p.idTipoVehiculo=tp.idTipoDeVehiculo 
				left join servicio s on p.idServicio=s.idServicio
				where lista=".$lista.";";
	$resultado=db_query($consulta);

	$array=[];

	foreach($resultado as $fila){


		$array[]="<tr>
		<td>"."$fila[id]"."</td>
		<td>"."$fila[servicio]"."</td>
		<td>"."$fila[tipovehiculo]"."</td>
		<td>"."$fila[valorkm]"."</td>
		<td>"."$fila[valorFijo]"."</td>
		<td>"."$fila[valorHora]"."</td>
		</tr>";


	}

	echo json_encode($array);


?>