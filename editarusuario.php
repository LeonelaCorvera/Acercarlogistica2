<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$id= $_POST['id']; 
$contrasenia= $_POST['contrasenia']; 
$perfil= $_POST['perfil']; 



	$consulta="select * from usuario where idUsuario=".$id.";";
	$resultado=db_query($consulta);


	$consulta2="";
	$cons="UPDATE usuario SET ";
	$tex="";
	$param=0;

	foreach($resultado as $fila){


		if ($fila['idusuario']!=$id) {
			$tex=" idusuario='".$id."'";
			$param++;
		} if ($fila['contrasena']!=$contrasenia) {
			$tex .= ($param==1) ? " ,contrasena='".$contrasenia."'" : " contrasena='".$contrasenia."'" ;
			$param++;
		} if ($fila['perfil']!=$perfil) {
			$tex .= ($param>0) ? " ,perfil='".$perfil."'" : " perfil='".$perfil."'" ;
			$param++;
		} if ($tex!="") {
			$tex.=" where idusuario=".$id;
			$consulta2=$cons.$tex;
		}
	}


	if ($consulta2!="") {
		$resultado2=db_query($consulta2);
	} 


	header("Location: index.php?menu=ListadoUsuario");

?>