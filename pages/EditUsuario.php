<?php

echo "<section class='content'>

      <!-- SELECT2 EXAMPLE -->
      <div class='box box-default'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Modificar Usuario</h3>

          <div class='box-tools pull-right'>
            <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class='box-body'>";

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


$id =$_POST['id']; 


$consulta="SELECT * FROM usuario where idusuario='".$id."';";
$resultado=db_query($consulta);

$result = json_encode($resultado, true);

foreach($resultado as $fila){


   echo "   <form action='editarusuario.php' method='post'>
              <div class='row'>
                <div class='col-xs-3'>
                  <label>Nombre de usuario:</label>
                  <input type='text' class='form-control' name='id' value='"."$fila[idusuario]"."''>
                </div>
                <div class='col-xs-3'>
                  <label>Contraseña:</label>
                  <input type='password' class='form-control' name='contrasenia'  value='"."$fila[contrasena]"."'' >
                </div>
                 <div class='col-xs-3'>
                  <label>Repita contraseña:</label>
                  <input type='password' class='form-control' name='repite'>
                </div>
            </div>
<br>
             <div class='row'>
              <div class='col-xs-3'>
                <div class='form-group'>
                  <label>Perfil:</label>
                  <select class='form-control' name='perfil' >
                    <option value='1'>Administrador</option>
                    <option value='2'>Recepcionista</option>
                    <option value='3'>Cliente</option>
                  </select>
                </div>
              </div>
            </div>
            <br>
                

              <div class='box-footer'>
                <button type='submit' class='btn btn-info pull-right'>Modificar</button>
              </div>
        </form>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->";


      }

?>