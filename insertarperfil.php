<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database.php';

$nombre= $_POST['nombre'];
$tipo= $_POST['tipo'];
$funciones= $_POST['funciones'];	

		$consulta="INSERT INTO perfil (descripcion,flagBaja,tipo)VALUES('".$nombre."',1,'".$tipo."');";
		$resultado=db_query($consulta);

		var_dump($resultado);

		if (isset($resultado)) {

			foreach($funciones as $fila){

				$consulta2="INSERT INTO perfil_funcion(idrol,idfuncion) VALUES(".$resultado.",".$fila.");";
				$resultado2=db_query($consulta2);
				
			}

		}
		

?>
