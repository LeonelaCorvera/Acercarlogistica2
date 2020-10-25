<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


	$consulta="SELECT * FROM listadeprecios;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		$id = (isset($fila['id'])) ? $fila['id'] : 0 ;


		if ($fila['activa']==1) {
			$estado='<span class="badge bg-green">Habilitado</span>';
			$boton='<button type="button" value="'.$id.'" class="btn btn-danger" onclick="eliminar(this.value,0)";><i class="fa fa-trash"></i></button>';
		}else{
			$estado='<span class="badge bg-red">Inhabilitado</span>';
			$boton='<button type="button" value="'.$id.'" class="btn btn-success" onclick="recuperar(this.value,1)";><i class="fa fa-check"></i></button>';
		}
		if ($fila['esGeneral']==1) {
			$general='<span ><i class="fa fa-check"></span>';
		}else{
			$general='<span ><i class="fa fa-times"></span>';
		}
		


		echo "<tr>
		<td>"."$fila[id]"."</td>
		<td>"."$fila[descripcion]"."</td>
		<td>".$general."</td>
		<td>".$estado."</td>
		<td>
		<button type='button' value='".$id."' class='btn btn-primary' title='clonarLista' data-toggle='modal' data-target='#modalEditarLista'><i class='fa fa-edit'></i></button>
		".$boton."
		</td>
		</tr>";


	}

?>