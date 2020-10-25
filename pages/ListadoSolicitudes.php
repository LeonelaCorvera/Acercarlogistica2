<!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
<!-- Select2 -->
  <script src="bower_components/select2/dist/js/select2.full.min.js"></script>

<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Filtrar solicitudes</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <table id="example1" action="insertarvehiculo.php" method="post">
              <div class="row">
                <div class="col-xs-3">
                    <label>Fecha:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservation">
                    </div>
                </div>
                <div class="col-xs-3">
                    <label>Cliente:</label>
                    <select class="form-control select2" name="tipo">
                       <option>Seleccionar</option>
                       <option>Telefonica</option>
                       <option>Cencosud</option>
                    </select>
                </div>
                <div class="col-xs-3">
                    <label>Chofer:</label>
                    <select class="form-control select2" name="tipo">
                       <option>Seleccionar</option>
                       <option>Federico Rodriguez</option>
                    </select>
                </div>
                <div class="col-xs-3">
                    <label>Servicio:</label>
                    <select class="form-control select2" name="tipo">
                       <option>Seleccionar</option>
                       <option>remis</option>
                       <option>flete</option>
                    </select>
                </div>
            </div>
<br><br>
               <div class="box-footer" >
                   <button type="button" class="btn btn-success pull-right">Imprimir</button>
                   <button type="button" class="btn btn-warning pull-right">Exportar</button>
                   <button type="submit" class="btn btn-primary pull-right">Buscar</button>
                
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
          <h3 class="box-title"> Listado de solicitudes</h3>

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
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2020-04-28</td>
                    <td>remis</td>
                    <td>Jorge Tello</td>
                    <td>CFR srl</td>
                    <td>ard-123</td>
                    <td>30</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>2020-04-28</td>
                    <td>flete</td>
                    <td>Federico Rodriguez</td>
                    <td>Telefonica</td>
                    <td>ddd-333</td>
                    <td>100</td>
                  </tr>

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
      <!-- /.box -->
</section>

<script>
  $(function () {

    

    //Date range picker
    $('#reservation').daterangepicker({
    "locale": {
        "format": "YYYY-MM-DD",
        "separator": " - ",
        "applyLabel": "Aceptar",
        "cancelLabel": "Cancelar",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Custom",
        "daysOfWeek": [
            "Do",
            "Lu",
            "Ma",
            "Mi",
            "Ju",
            "Vi",
            "Sa"
        ],
        "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ],
        "firstDay": 0
    }
})
    //Initialize Select2 Elements
    $('.select2').select2()
    
  })

  $(document).ready(function()
{
  //Defino los totales de mis 2 columnas en 0
  var total_col = 0;
  //Recorro todos los tr ubicados en el tbody
  $('#ejemplo tbody').find('tr').each(function (i, el) {
             
        //Voy incrementando las variables segun la fila ( .eq(0) representa la fila 1 )     
        total_col += parseFloat($(this).find('td').eq(6).text());
                
    });
    //Muestro el resultado en el th correspondiente a la columna
    $('#ejemplo tfoot tr th').eq(1).text(total_col);

});
</script>