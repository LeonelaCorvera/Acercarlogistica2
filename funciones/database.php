<?php
	include_once ("./funciones/config.php");//debo indicar el directorio relativo al working directory!!
	function db_query($sql) {
		$con=mysqli_connect(SQL_SERVER,SQL_USER,SQL_PASS,SQL_DB);
		mysqli_set_charset( $con, 'utf8');/*Establecemos el juego de caracteres para el intercambio con el server*/
		$fecha=date('Y-m-d H:i:s');
		file_put_contents('mysql.log', "$fecha\n$sql\n", FILE_APPEND);//Creamos un log de querys
		
		$res=mysqli_query($con,$sql)or die("Fallo al realizar la consulta!!!!".$sql);
		//echo mysqli_error($con);
		if(gettype($res) == 'boolean') {
			if(stripos('' . $sql,'INSERT') === false )
				$res=mysqli_affected_rows($con);
			/* Si la consulta no fue INSERT, devolvemos las cantidad de filas afectadas.*/
			else
				$res=mysqli_insert_id($con);
			/* Si la consulta fue INSERT, devolvemos el ID autogenerado..*/
			mysqli_close($con);
			return $res;
		} else {
			$arr=array();
			while($row=mysqli_fetch_assoc($res)){
				$arr[]=$row;
			}
			mysqli_close($con);
			return $arr;
		}
	}
?>