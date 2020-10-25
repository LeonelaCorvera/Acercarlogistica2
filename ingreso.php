<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\session.php';
include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database.php';


$usuario= $_POST['usuario'];
$password= $_POST['password'];


if (!empty($_POST['usuario']) or !empty($_POST['password'])) {
		
		$consulta="
			SELECT *
			FROM usuario
			WHERE idusuario='".$usuario."' and contrasena='".$password."' and flagBaja=1;
		";

		$resultado=db_query($consulta);
		//si hay algun usuario con esa contrasena
		if(count($resultado)==1){

			session_set("usuario",$usuario);
			$user=session_get("usuario");
			$consulta2="SELECT idrol FROM usuario_perfil where idusuario='".$user."';";
			$resultado2=db_query($consulta2);
			$array= array();

			foreach ($resultado2 as $fila ) {

					
				array_push ( $array , $fila );
				
			}

			session_set("permisos",$array);
			session_var_unset("error");
			header("Location: index.php");
		}else{
			header("location:pages/Login.php");
		}
	}


?>