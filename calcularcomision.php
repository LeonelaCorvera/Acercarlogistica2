<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$chofer = (isset($_POST['chofer'])) ? $_POST['chofer'] : "0" ;

	$consulta="SELECT s.descripcion as servicio_des, tp.descripcion as tipovehiculo_des,c.razon_social,ch.nombre, ch.Apellido,ch.comisionPorcentaje, v.* 
				FROM viaje v 
				join servicio s on v.Servicio_idServicio=s.idServicio 
				join tipodevehiculo tp on v.tipoVehiculo=tp.idTipoDeVehiculo 
				join cliente c on v.idClliente=c.idcliente
				join chofer ch on v.Chofer_idChofer=ch.idChofer
				where Chofer_idChofer=".$chofer."
				and comisionPaga=0;";
	$resultado=db_query($consulta);

	$array=[];

	foreach($resultado as $fila){

		$comision=($fila['valorViaje']/100)*$fila['comisionPorcentaje'];


		$array[]="<tr>
		<td>"."$fila[idViaje]"."</td>
		<td>"."$fila[fecha]"."</td>
		<td>"."$fila[servicio_des]"."</td>
		<td>"."$fila[nombre]"." "."$fila[Apellido]"."</td>
		<td>"."$fila[razon_social]"."</td>
		<td>"."$fila[tipovehiculo_des]"."</td>
		<td>".$comision."</td>
		</tr>";


	}

	echo json_encode($array);


?>