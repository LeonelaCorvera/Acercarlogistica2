
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nuevo Vehiculo</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <form id="example1" action="insertarvehiculo.php" method="post">
              <div class="row">
                <div class="col-xs-3">
                  <label>Patente:</label>
                  <input type="text" class="form-control" name="patente">
                </div>
                <div class="col-xs-3">
                  <label>Marca:</label>
                  <input type="text" class="form-control" name="marca">
                </div>
                 <div class="col-xs-3">
                  <label>Modelo:</label>
                  <input type="text" class="form-control" name="modelo">
                </div>
              <div class="col-xs-2">
                <label>Año:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="anio">
                </div>
                <!-- /.input group -->
              </div>
            </div>
<br>
             <div class="row">
              <div class="col-xs-3">
                <div class="form-group">
                  <label>Tipo de vehiculo:</label>
                  <select class="form-control" name="tipo">
                    <option value=''>Seleccionar</option>
                    <?php

                        include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

                          $consulta="SELECT * FROM acercarlogistca.tipodevehiculo;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idTipoDeVehiculo]."'>(".$fila[idTipoDeVehiculo].")-".$fila[descripcion]."</option>";
                          }
                      ?>
                  </select>
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <label>Seguro al dia:</label>
                  <select class="form-control" name="seguro">
                    <option value='1'>Si</option>
                    <option value='0'>No</option>
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
<script>
  $(function () {

    //Date picker
    $("#datepicker").datepicker( {
    format: "yyyy",
    startView: "years", 
    minViewMode: "years"
});

  })
</script>