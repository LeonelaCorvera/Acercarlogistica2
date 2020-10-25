<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


$estado= $_POST['estado']; 
$id= $_POST['id']; 

	$consulta="UPDATE listadeprecios SET activa=".$estado." where id=".$id;
	$resultado=db_query($consulta);



?>