<?php

echo "<section class='content'>

      <!-- SELECT2 EXAMPLE -->
      <div class='box box-default'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Modificar Vehiculo</h3>

          <div class='box-tools pull-right'>
            <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
          </div>
        </div'
        <!-- /.box-header -->

     <div class='box-body'>";


include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


$json =$_POST['id']; 
$id = json_decode($json, true);

$consulta="SELECT * FROM vehiculo where idVehiculo=".$id.";";
$resultado=db_query($consulta);

$result = json_encode($resultado, true);

foreach($resultado as $fila){

  if ($fila['seguroAlDia']=="Si") {
    $val1="Si";
    $val2="No";
  } else {
    $val1="No";
    $val2="Si";
  }
  


    echo  "<form action='editarvehiculo.php' method='post'>
              <div class='row'>
                <div class='col-xs-1'>
                  <label>Id:</label>
                  <input type='text' class='form-control' name='id' id='id' value='"."$fila[idVehiculo]"."' >
                </div>
                <div class='col-xs-3'>
                  <label>Patente:</label>
                  <input type='text' class='form-control' name='patente' id='patente' value='"."$fila[patente]"."'>
                </div>
                <div class='col-xs-3'>
                  <label>Marca:</label>
                  <input type='text' class='form-control' name='marca' id='marca' value='"."$fila[marca]"."'>
                </div>
                 <div class='col-xs-3'>
                  <label>Modelo:</label>
                  <input type='text' class='form-control' name='modelo' id='modelo' value='"."$fila[modelo]"."'>
                </div>
                 <div class='col-xs-2'>
                  <label>Año:</label>
                  <input type='text' class='form-control' name='anio' id='anio' value='"."$fila[anio]"."'>
                </div>
            </div'
<br>
             <div class='row'>
              <div class='col-xs-3'>
                <div class='form-group'>
                  <label>Tipo de vehiculo:</label>
                  <select class='form-control' name='tipo' id='tipo'>";
                
                          $consulta2="SELECT * FROM tipodevehiculo where idTipoDeVehiculo="."$fila[idTipoDeVehiculo]".";";
                          $resultado2=db_query($consulta2);

                          foreach($resultado2 as $fila2){

                            echo "<option value='".$fila2[idTipoDeVehiculo]."'>(".$fila2[idTipoDeVehiculo].")-".$fila2[descripcion]."</option>";
                          }

                          $consulta3="SELECT * FROM acercarlogistca.tipodevehiculo;";
                          $resultado3=db_query($consulta3);

                          foreach($resultado3 as $fila3){

                            echo "<option value='".$fila3[idTipoDeVehiculo]."'>(".$fila3[idTipoDeVehiculo].")-".$fila3[descripcion]."</option>";
                          }

                  echo "</select>
                </div>
              </div>
              <div class='col-xs-2'>
                <div class='form-group'>
                  <label>Seguro al dia:</label>
                  <select class='form-control' name='seguro' id='seguro'>
                    <option>".$val1."</option>
                    <option>".$val2."</option>
                  </select>
                </div>
              </div>
            </div>
            <br>";

  }


?>

        <div class='box-footer'>
                <button type='button' class='btn btn-info pull-right' onclick="modificar()">Modificar</button>
              </div>
        </form>
       
      </div>



<script type="text/javascript">


function modificar(){



  var patente=$("#patente").val();
  var id=$("#id").val();
  var modelo=$("#modelo").val();
  var marca=$("#marca").val();
  var anio=$("#anio").val();
  var tipo=$("#tipo").val();
  var seguro=$("#seguro").val();

  var url = "editarvehiculo.php";
  $.ajax({                                       
     url: url,                     
     data:{"patente": patente,"id":id, "modelo":modelo, "marca":marca, "anio":anio, "tipo":tipo, "seguro":seguro}, 
     method : 'post',
     dataType : 'json',
     success: function(data)     
     {
          exito();
     },
     error: function(data)             
     {
          exito();
     }

   });
}



    

</script>