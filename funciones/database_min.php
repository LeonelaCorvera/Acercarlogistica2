<?php
	include_once ("./funciones/config.php");//debo indicar el directorio relativo al working directory!!
	function db_query($sql) {//recibimos por parametro una cadena con la consulta a realizar
		$con=mysqli_connect(SQL_SERVER,SQL_USER,SQL_PASS,SQL_DB);//conexion con BD
		
		$fecha=date('Y-m-d H:i:s');
		file_put_contents('mysql.log', "$fecha\n$sql\n", FILE_APPEND);//Creamos un log de querys
		
		$res=mysqli_query($con,$sql)or die("Fallo al realizar la consulta!!!!".$sql);
			
		$arr=array();
		while($row=mysqli_fetch_assoc($res)){
			$arr[]=$row;
		}
		mysqli_close($con);
		return $arr;//Devolvemos el resultado de la consulta. (Filas) 
	}
?>