
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Detalle Usuario</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <table id="example1" action="insertarchofer.php" method="post">
              <div class="row">
                <div class="col-xs-3">
                  <label>Nombre de usuario:</label>
                  <input type="text" class="form-control" name="nombre" disabled>
                </div>
                <div class="col-xs-3">
                  <label>Contraseña:</label>
                  <input type="password" class="form-control" name="apellido" disabled>
                </div>
                 <div class="col-xs-3">
                  <label>Repita contraseña:</label>
                  <input type="password" class="form-control" name="dni" disabled>
                </div>
            </div>
<br>
             <div class="row">
              <div class="col-xs-3">
                <div class="form-group">
                  <label>Perfil:</label>
                  <select class="form-control" name="tipo" disabled>
                    <option>Administrador</option>
                    <option>Recepcionista</option>
                    <option>Cliente</option>
                  </select>
                </div>
              </div>
            </div>
            <br>
             
        </table>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
