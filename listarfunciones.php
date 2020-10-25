<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


	$consulta="SELECT distinct entidad FROM funciones;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){


		echo "<div class='row'>
	  			<div class='box-body'>
	  				<h4>"."$fila[entidad]".":</h4>
				</div>";

		$consulta2="SELECT * FROM funciones where entidad='"."$fila[entidad]"."';";
		$resultado2=db_query($consulta2);

		foreach($resultado2 as $fila2){

			echo "<div class='col-xs-3'>

				  <input class='form-check-input' type='checkbox' name='grupo' value='"."$fila2[idfunciones]"."'>
				  <label class='form-check-label'>"."$fila2[descripcion]"."</label>

				</div>";

		}


		echo "</div>";


	}

?>