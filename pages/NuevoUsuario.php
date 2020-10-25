
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nuevo Usuario</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <form id="example1" action="insertarusuario.php" method="post">
              <div class="row">
                <div class="col-xs-3">
                  <label>Nombre de usuario:</label>
                  <input type="text" class="form-control" name="usuario">
                </div>
                <div class="col-xs-3">
                  <label>Contraseña:</label>
                  <input type="password" class="form-control" name="pass">
                </div>
                 <div class="col-xs-3">
                  <label>Repita contraseña:</label>
                  <input type="password" class="form-control" name="pass2">
                </div>
            </div>
<br>
             <div class="row">
              <div class="col-xs-3">
                <div class="form-group">
                  <label>Perfil:</label>
                  <select class="form-control" name="perfil">
                    <option value='0'>Seleccionar</option>
                      <?php

                        include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

                          $consulta="SELECT * FROM perfil;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idPerfil]."'>".$fila[descripcion]."</option>";
                          }
                      ?>
                  </select>
                </div>
              </div>

              <div class="col-xs-3">
                <div class="form-group">
                  <label>Cliente:</label>
                  <select class="form-control" name="cliente">
                    <option value='0'>Seleccionar</option>
                      <?php

                          $consulta="SELECT * FROM cliente;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idcliente]."'>".$fila[razon_social]."</option>";
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
