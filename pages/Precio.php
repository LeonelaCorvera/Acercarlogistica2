
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Precio</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">


              <div class="row">
                <div class="col-xs-3">
                  <div class="form-group">
                  <label>Lista de precios:</label>
                  <select class="form-control" name="listaP" id="listaP" onchange="consulta(this.value);">
                    <option value=''>Seleccionar</option>
                    <?php

                        include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

                          $consulta="SELECT * FROM listadeprecios where activa=1;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[id]."'>(".$fila[id].")-".$fila[descripcion]."</option>";
                          }
                      ?>
                  </select>
                </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                  <label>Servicio:</label>
                  <select class="form-control" name="servicio" id="servicio">
                    <option value=''>Seleccionar</option>
                    <?php

                          $consulta="SELECT * FROM servicio;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idServicio]."'>(".$fila[idServicio].")-".$fila[descripcion]."</option>";
                          }
                      ?>
                  </select>
                </div>
                </div>

                <div class="col-xs-3">
                  <div class="form-group">
                  <label>Tipo de vehiculo:</label>
                  <select class="form-control" name="tipo" id="tipo">
                    <option value=''>Seleccionar</option>
                    <?php

                          $consulta="SELECT * FROM tipodevehiculo;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idTipoDeVehiculo]."'>(".$fila[idTipoDeVehiculo].")-".$fila[descripcion]."</option>";
                          }
                      ?>
                  </select>
                </div>
                </div>

              </div>

<br>
              <div class="row">
                <div class="col-xs-2">
                  <label>Valor fijo:</label>
                  <input type="number" class="form-control" name="fijo" id="fijo" value="0">
                </div>

                <div class="col-xs-2">
                   <label>Valor por hora:</label>
                  <input type="number" class="form-control" name="hora" id="hora" value="0">
                </div>
 
                <div class="col-xs-2">
                  <label>Valor por km:</label>
                  <input type="number" class="form-control" name="km" id="km" value="0">
                </div>
                
              </div>
       

<br><br>
              <div class="box-footer">
                <button type="button" class="btn btn-info pull-right" onclick="insert();">Guardar</button>
              </div>

        
      </div>

</section>
      <!-- /.box -->

<section class='content'>

  <form action="process.php" method="post" target="_blank" id="formExport">
    <input type="hidden" id="data_to_send" name="data_to_send" />
</form>

      <!-- SELECT2 EXAMPLE -->
      <div class='box box-default'>
        <div class='box-header with-border'>
          <h3 class='box-title'> Listado de precios</h3>

          <div class='box-tools pull-right'>
            <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class='box-body'>

      <table id="export_to_excel" class='table table-bordered table-striped'>
                <thead>

                <tr>
                  <th>Id</th>
                  <th>Servicio</th>
                  <th>Tipo vehiculo</th>
                  <th>Valor fijo</th>
                  <th>Valor KM</th>
                  <th>Valor HR</th>
                </tr>
                </thead>
                <tbody id='lista'>
                

                </tbody>
                
              </table>
      </div>
   </section>

<script>

  function insert(){  

    var listaP=$('#listaP').val();
    var tipo=$('#tipo').val();
    var servicio=$('#servicio').val();
    var fijo=$('#fijo').val();
    var hora=$('#hora').val();
    var km=$('#km').val();


    var url = "insertarprecio.php";
    $.ajax({                                       
       url: url,                     
       data:{"listaP": listaP, "servicio": servicio, "tipo": tipo ,"fijo": fijo, "hora": hora, "km": km}, 
       method : 'post',
       dataType : 'json',
       success: function(data)             
       {
            exito();
       },
       error: function(data)             
       {
            exito();
       }

     });
}

  function consulta(lista){  


  var url = "listarprecios.php";
  $.ajax({                                       
     url: url,                     
     data:{"lista": lista}, 
     method : 'post',
     dataType : 'json',
     success: function(data)             
     {
      $('#lista').html(data);
     },
     error: function(data)             
     {
        $('#lista').html(data);
     }

   });
}


</script>