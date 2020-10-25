<?php


echo "<section class='content'>

      <!-- SELECT2 EXAMPLE -->
      <div class='box box-default'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Nuevo Cliente</h3>

          <div class='box-tools pull-right'>
            <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
          </div>
        </div>";

       

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


$json =$_POST['id']; 
$id = json_decode($json, true);

$consulta="SELECT * FROM cliente where idcliente=".$id.";";
$resultado=db_query($consulta);

$result = json_encode($resultado, true);

foreach($resultado as $fila){


    echo " <div class='box-body'>

      <form action='editarcliente.php' method='post'>
              <div class='row'>
                <div class='col-xs-1'>
                  <label>Id:</label>
                  <input type='text' class='form-control' name='id' required  value='"."$fila[idcliente]"."'>
                </div>
                <div class='col-xs-3'>
                  <label>Razon social:</label>
                  <input type='text' class='form-control' name='razon' required value='"."$fila[razon_social]"."'>
                </div>
                <div class='col-xs-3'>
                  <label>Contacto:</label>
                  <input type='text' class='form-control' name='contacto' value='"."$fila[contacto]"."'>
                </div>
                 <div class='col-xs-3'>
                  <label>Direccion:</label>
                  <input type='text' class='form-control' name='direccion' value='"."$fila[direccion]"."'>
                </div>
                 
            </div>
<br>
             <div class='row'>
              <div class='col-xs-3'>
                  <label>Telefono:</label>
                  <input type='number' class='form-control' name='telefono' required value='"."$fila[telefono]"."'>
                </div>
              <div class='col-xs-2'>
                <div class='form-group'>
                  <label>Tipo de doc:</label>
                  <select class='form-control' name='tipo' value='"."$fila[tipoDoc]"."'>
                    <option value='dni'>DNI</option>
                    <option value='cuit'>CUIT</option>
                  </select>
                </div>
              </div>
              <div class='col-xs-3'>
                  <label>Documento:</label>
                  <input type='number' class='form-control' name='doc' value='"."$fila[doc]"."'>
                </div>
               
              <div class='col-xs-3'>
                <div class='form-group'>
                  <label>Lista de precio:</label>
                  <select class='form-control' name='lista' required  value='"."$fila[listaPrecio]"."'>";
                      

                        include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

                          $consulta="SELECT * FROM listadeprecios;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[id]."'>".$fila[descripcion]."</option>";
                          }
                     
                 echo " </select>
                </div>
              </div>
            </div>
            <br>
                

               <div class='box-footer'>
                <button type='submit' class='btn btn-info pull-right'>Guardar</button>
              </div>
        </form>

       
      </div>";

    }

?>
