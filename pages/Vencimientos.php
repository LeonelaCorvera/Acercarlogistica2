<section class="content">

      
      <div class="row">



        <div class="col-xs-12">
       

          <div class="box">

            

            <div class="box-header">
              <h3 class="box-title">Vencimientos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">



              <table id="example" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>Id Chofer</th>
                  <th>Nombre</th>
                  <th>V.seguro</th>
                  <th>Dias venc.</th>
                  <th>Licencia</th>
                  <th>Dias venc.</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  

                  <tr>
                  <td>1</td>
                  <td>Leonela Corvera</td>
                  <td>2020-05-18</td>
                  <td style="color: red;">-1</td>
                  <td>2020-05-05</td>
                  <td style="color: red;">-14</td>
                  <td>
                    <button type='button' title='Editar vencimiento' class='btn btn-warning' data-toggle='modal' data-target='#modalConfirmRefresh'><i class='fa fa-edit'></i></button>
                    <button type='button' title='Deshabilitar chofer' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
                  </td>
                </tr>


                </tbody>
                <tfoot>
                <tr>
                  <th>Id Chofer</th>
                  <th>Nombre</th>
                  <th>V.seguro</th>
                  <th>Dias venc.</th>
                  <th>Licencia</th>
                  <th>Dias venc.</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            
        </div>


        

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>


      

</section>



<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify " role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4>Seguro que desea deshabilitar este vehiculo?</h4>
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

<div class="modal fade" id="modalConfirmRefresh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify " role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4>Seguro que desea restaurar este buckup?</h4>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fa fa-refresh fa-4x animated rotateIn text-yellow"></i>

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
