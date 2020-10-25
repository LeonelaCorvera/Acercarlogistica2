<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

	$consulta="SELECT * FROM servicio where estado=1;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		$id = (isset($fila['idServicio'])) ? $fila['idServicio'] : 0 ;



		echo "<tr>
		<td>"."$fila[idServicio]"."</td>
		<td>"."$fila[descripcion]"."</td>
		<td>
			<button type='button' value='".$id."' class='btn btn-primary' onclick='sendId(this.value)';><i class='fa fa-edit'></i></button>
			<button type='button' class='btn btn-danger' value='".$id."' onclick='eliminar(this.value)'><i class='fa fa-trash'></i></button>
		</td>
		</tr>";


	}

?>