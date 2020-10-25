<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database.php';

$calle= $_POST['calle'];
$altura= $_POST['altura'];
$piso= $_POST['piso'];
$depto= $_POST['depto'];
$localidad= $_POST['localidad'];
$provincia= $_POST['provincia'];
$latitud=$_POST['lat'];
$longitud=$_POST['lon'];
$calle2= $_POST['calle2'];
$altura2= $_POST['altura2'];
$piso2= $_POST['piso2'];
$depto2= $_POST['depto2'];
$localidad2= $_POST['localidad2'];
$provincia2= $_POST['provincia2'];
$latitud2=$_POST['lat2'];
$longitud2=$_POST['lon2'];
$servicio= $_POST['servicio'];
$cliente= $_POST['cliente'];
$tipovehiculo =$_POST['tipovehiculo'];
$fecha= $_POST['fecha'];
$hora= $_POST['hora'];
$km= $_POST['km'];

//-----------CALCULA PRECIO---------------


$valor=0;
$horaAdicional=0;


$consultarLista="SELECT listaPrecio FROM cliente where idCliente=".$cliente." limit 1;";
$res=db_query($consultarLista);

foreach($res as $fila){

  $lista=$fila['listaPrecio'];

}

$consultarPrecio="SELECT * FROM precio where lista=".$lista." and idServicio=".$servicio." and idTipoVehiculo=".$tipovehiculo." limit 1;";
$precio=db_query($consultarPrecio);

if ($precio) {

  foreach($precio as $fila){
    
    $valorkm=$fila['valorkm']*$km;
    $valorfijo=$fila['valorFijo'];
    $valorHora=$fila['valorHora']*2;

    $horaAdicional=$fila['valorHora'];

    $valor=$valorkm+$valorfijo+$valorHora;
   }
   
  }

//--------------------------


	$consulta="INSERT INTO viaje
	(fecha,comisionPaga,valorViaje,Servicio_idServicio,Chofer_idChofer,idClliente,hora,km,estado,tipoVehiculo)
	VALUES('".$fecha."',0,".$valor.",".$servicio.",0,".$cliente.",'".$hora."',".$km.",'PENDIENTE',".$tipovehiculo.");";
	
	$resultado=db_query($consulta);

	if ($resultado) {

		$consul="select max(idViaje) from viaje;";
		$res=db_query($consul);


		$id=$res[0]["max(idViaje)"];

		$consulta2="INSERT INTO direccionesviaje(calle,numero,piso,departamento,localidad,provincia,Viaje_idViaje,latitud,longitud) VALUES('".$calle."',".$altura.",'".$piso."','".$depto."','".$localidad."','".$provincia."',".$id.",'".$latitud."','".$longitud."');";
		$resultado2=db_query($consulta2);
		$consulta3="INSERT INTO direccionesviaje(calle,numero,piso,departamento,localidad,provincia,Viaje_idViaje,latitud,longitud) VALUES('".$calle2."',".$altura2.",'".$piso2."','".$depto2."','".$localidad2."','".$provincia2."',".$id.",'".$latitud2."','".$longitud2."');";
		$resultado3=db_query($consulta3);

		
	} 

		header("Location: index.php?menu=NuevaSolicitud");

?>