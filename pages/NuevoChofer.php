
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nuevo Chofer</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <form action="insertarchofer.php" method="post">
              <div class="row">
                <div class="col-xs-3">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
                <div class="col-xs-3">
                  <label>Apellido:</label>
                  <input type="text" class="form-control" name="apellido">
                </div>
                 <div class="col-xs-2">
                  <label>DNI:</label>
                  <input type="text" class="form-control" name="dni">
                </div>
                 <div class="col-xs-3">
                  <label>Telefono:</label>
                  <input type="text" class="form-control" name="telefono">
                </div>
            </div>
<br>
             <div class="row">
              <div class="col-xs-3">
                <div class="form-group">
                  <label>Vehiculo:</label>
                  <select class="form-control" name="vehiculo">
                    <option value='0'>Seleccionar</option>
                      <?php

                        include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

                          $consulta="SELECT * FROM acercarlogistca.vehiculo;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idVehiculo]."'>(".$fila[idVehiculo].")-".$fila[patente]."</option>";
                          }
                      ?>
                  </select>
                </div>
              </div>
            </div>
            <br>
                

              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
        </form>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
