
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nuevo adicional</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <table id="example1" action="insertarvehiculo.php" method="post">
              <div class="row">
                <div class="col-xs-4">
                    <label>Nombre:</label>
                    <input type="text" class="form-control pull-right" id="nombre">
                </div>
                <div class="col-xs-2">
                    <label>Importe:</label>
                    <input type="number" class="form-control pull-right" id="nombre">
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                      <label>Operacion:</label>
                      <select class="form-control" name="operacion">
                        <option>+</option>
                        <option>-</option>
                      </select>
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                      <label>Unidad:</label>
                      <select class="form-control" name="unidad">
                        <option>$</option>
                        <option>%</option>
                      </select>
                    </div>
                </div>
            </div>
<br>
               <div class="box-footer" >
                   <button type="submit" class="btn btn-primary pull-right">Guardar</button>
              </div>
        </table>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->


</section>
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"> Listado de adicionales</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <table id="ejemplo" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Importe</th>
                  <th>Operacion</th>
                  <th>Unidad</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Espera</td>
                    <td>20</td>
                    <td>+</td>
                    <td>%</td>
                    <td>
                    <button type='button' title='Restaurar buckup' class='btn btn-success' data-toggle='modal' data-target='#modalConfirmRefresh'><i class='fa fa-edit'></i></button>
                    <button type='button' title='Eliminar buckup' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
                  </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Lluvia</td>
                    <td>10</td>
                    <td>+</td>
                    <td>$</td>
                    <td>
                    <button type='button' title='Modificar adicional' class='btn btn-success' data-toggle='modal' data-target='#modalConfirmRefresh'><i class='fa fa-edit'></i></button>
                    <button type='button' title='Eliminar adicional' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
                  </td>
                  </tr>

                </tbody>
                <tfoot>
                <tr>
                 <th>Id</th>
                  <th>Nombre</th>
                  <th>Importe</th>
                  <th>Operacion</th>
                  <th>Unidad</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
</section>



<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify " role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4>Seguro que desea eliminar este adicional?</h4>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fa fa-trash fa-4x animated rotateIn text-red"></i>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="" class="btn btn-default pull-left">Si</a>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>