<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


$km =$_POST['km']; 
$servicio =$_POST['servicio']; 
$cliente =$_POST['cliente']; 
$tipovehiculo =$_POST['tipovehiculo'];

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

    echo "<div id='precio'>
                      <div class='col-xs-2'>
                        <label>Importe:</label>
                        <input type='number' class='form-control' id='importe' value='".$valor."'>
                      </div>
                      <div class='col-xs-2'>
                        <label>Por hora adicional:</label>
                        <input type='number' class='form-control' id='horaAdicional' value='".$horaAdicional."'>
                      </div>
                  <div>";

  }

} else{

  echo "<div class='col-xs-2'>
           <label>No hay precio para este servicio</label>
        </div>";
}


?>