

<div id="resp">


<section class="content-header">
      <h1>
        Servicios
      </h1>

</section>

<section class="content">

      
      <div class="row">



        <div class="col-xs-12">
       

          <div class="box">

            

            <div class="box-header">
              <h3 class="box-title">Lista de servicios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="col-xs-3">
                 <label onclick="document.getElementById('c1').submit();">
                      <input  id="c1" name="c1" type="checkbox" checked data-toggle="toggle" data-on="Activos" data-off="Inactivos" data-onstyle="success" data-offstyle="danger" >
                  </label>
                </div>


              <table id="evaluate" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Descripcion</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                

                  <?php


                    include('listarservicios.php');


                  ?>


                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Descripcion</th>
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






<script type="text/javascript">

  
function sendId(id){  
  
        var url = "pages/EditServicio.php";
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
      title: '¿Desea eliminar esta servicio?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar'
      }).then((result) => {
        if (result.value) {

          var url = "deleteservicio.php";
          $.ajax({                                       
             url: url,                     
             data:{"id":id}, 
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

</div>