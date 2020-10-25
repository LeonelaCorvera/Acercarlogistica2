
<section class="content">


    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nueva lista de precios</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
<br>
     <div class="box-body">

      <form action="insertarlista.php" method="post">
              <div class="row">
                <div class="col-xs-3">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" name="lista" required>
                </div>

                <div class="col-xs-2">
                  <br>
                 <label onclick="document.getElementById('c1').submit();">Es general:
                      <input  name="general" id="c1" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" >
                  </label>
                </div>
            </div>
             
            <br>
                

              <div class="box-footer">
                <button type="button" class="btn btn-warning pull-right" title='clonarLista' data-toggle='modal' data-target='#modalClonarLista'>Clonar lista</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
        </form>
        <!-- /.box-body -->
       
      </div>
    </div>

</section>
<section class="content">
      
      <div class="row">



        <div class="col-xs-12">
       

          <div class="box">

            

            <div class="box-header">
              <h3 class="box-title">Listas de precios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >

             

            <div style="overflow-y: scroll; height:360px; width: 98%;">

              <table id="example2" class="table table-bordered table-striped" >
                <thead>

                <tr>
                  <th>Id</th>
                  <th>Descripcion</th>
                  <th>General</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </thead>


                <tbody>
                  

                  <?php


                    include('listarlistasdeprecios.php');


                  ?>


                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Descripcion</th>
                  <th>General</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>

            </div>

            </div>
            
        </div>


        

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>


      

</section>






<div class="modal fade" id="modalClonarLista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify " role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4>Clonar lista de precio</h4>
      </div>

      <!--Body-->
      <div class="modal-body">

        <div class="row">
              <div class="col-xs-12">
                <div class="form-group">
                  <label>Lista de precios:</label>
                  <select class="form-control" name="vehiculo">
                    <option value='0'>Seleccionar</option>
                      <?php

                          $consulta="SELECT * FROM acercarlogistca.listadeprecios;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[id]."'>(".$fila[id].")-".$fila[descripcion]."</option>";
                          }
                      ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                  <label>Nombre de nueva lista:</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
            </div>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a type="button" class="btn  btn-default waves-effect pull-left" data-dismiss="modal">Cancelar</a>
        <a href="" class="btn btn-danger ">Clonar</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>


<div class="modal fade" id="modalEditarLista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify " role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4>Modificar lista de precio</h4>
      </div>

      <!--Body-->
      <div class="modal-body">

        <div class="row">
            </div>
            <div class="row">
                <div class="col-xs-12">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
                <div class="col-xs-12">
                  <br>
                 <label onclick="document.getElementById('c1').submit();">Es general:
                      <input  name="general" id="c1" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" >
                  </label>
                </div>
            </div>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a type="button" class="btn  btn-default waves-effect pull-left" data-dismiss="modal">Cancelar</a>
        <a href="" class="btn btn-primary" >Modificar</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>


<script type="text/javascript">

  
function sendId(id){  
  
        var url = "pages/Edit.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data:{"id": id}, 
           success: function(data)             
           {
             $('#resp').html(data);               
           }
       });
}

  function eliminar(id){

      Swal.fire({
      title: '¿Desea deshabilitar esta lista de precios?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, deshabilitar'
      }).then((result) => {
        if (result.value) {

          var url = "deletelista.php";
          $.ajax({                                       
             url: url,                     
             data:{"id":id, "estado":0}, 
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

        
      })

    }  

    function recuperar(id){

      Swal.fire({
      title: '¿Desea habilitar esta lista de precios?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, habilitar'
      }).then((result) => {
        if (result.value) {

          var url = "deletelista.php";
          $.ajax({                                       
             url: url,                     
             data:{"id":id, "estado":1}, 
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

        
      })

    }  


</script>
