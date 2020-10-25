<?php



	$consulta="SELECT idChofer,nombre,Apellido FROM acercarlogistca.chofer where flagBaja=1";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){


		echo "<tr>
		<td>"."<input type='radio' name='grupo' value='"."$fila[idChofer]"."'>"."</td>
		<td>"."$fila[idChofer]"."</td>
		<td>"."$fila[nombre]"." "."$fila[Apellido]"."</td>
		</tr>";


	}

?>