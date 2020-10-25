
<section class="content">

    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Calcular comision</h3>
      </div>

     <div class="box-body">
      <div class="col-xs-4">
        <label>Chofer:</label>
        <select class="form-control select2" name="chofer" id="chofer">
           <option>Seleccionar</option>
           <?php

            include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

              $consulta="SELECT * FROM acercarlogistca.chofer;";
              $resultado=db_query($consulta);

              foreach($resultado as $fila){

                echo "<option value='".$fila[idChofer]."'>(".$fila[idChofer].")-".$fila[nombre]." ".$fila[Apellido]."</option>";
              }
          ?>
        </select>
     </div>
    </div>    

<br>
        <div class="box-footer" >
           <button type="button" class="btn btn-success pull-right">Imprimir</button>
           <button type="button" class="btn btn-warning pull-right">Exportar</button>
           <button type="button" class="btn btn-primary pull-right" onclick="consulta();">Buscar comisiones pendientes</button>
        </div>
  </div>
</section>
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"> Detalle de viajes</h3>

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
                  <th>Fecha</th>
                  <th>Servicio</th>
                  <th>Chofer</th>
                  <th>Cliente</th>
                  <th>vehiculo</th>
                  <th>Importe</th>
                </tr>
                </thead>
                <tbody id='lista'>
                

                </tbody>
                <tfoot>
                <tr>
                 <th colspan="6">Total</th>
                  <th>2200</th>
                  
                </tr>
                </tfoot>
              </table>
        <!-- /.box-body -->
       
      </div>
      <div class="box-footer" >
           <button type='button' class="btn btn-primary pull-right"  data-toggle='modal' data-target='#modalConfirmDelete'>Cobrar</button>
      </div>
     
</section>


 <!-- /.Modal -->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify " role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4>¿Seguro que desea dar como cobradas estas comisiones?</h4>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fa fa-warning fa-4x animated rotateIn text-yellow"></i>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="" class="btn btn-default pull-left">No</a>
        <a type="button" class="btn  btn-warning waves-effect" data-dismiss="modal">Si</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>


<script>

   function consulta(){  



    var chofer=$("#chofer").val();


    var url = "calcularcomision.php";
    $.ajax({                                       
       url: url,                     
       data:{"chofer": chofer}, 
       method : 'post',
       dataType : 'json',
       success: function(data)             
       {
        $('#lista').html(data);
        calcularTotal();
       },
       error: function(data)             
       {
          $('#lista').html(data);
          calcularTotal();
       }

     });
  }

 function calcularTotal(){
  //Defino los totales de mis 2 columnas en 0
  var total_col = 0;
  //Recorro todos los tr ubicados en el tbody
  $('#ejemplo tbody').find('tr').each(function (i, el) {
             
        //Voy incrementando las variables segun la fila ( .eq(0) representa la fila 1 )     
        total_col += parseFloat($(this).find('td').eq(6).text());
                
    });
    //Muestro el resultado en el th correspondiente a la columna
    $('#ejemplo tfoot tr th').eq(1).text(total_col);

};
</script>