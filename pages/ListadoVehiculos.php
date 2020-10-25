<div id="resp">


<section class="content-header">
      <h1>
        Vehiculos
      </h1>

</section>

<section class="content">

      
      <div class="row">



        <div class="col-xs-12">
       

          <div class="box">

            

            <div class="box-header">
              <h3 class="box-title">Lista de vehiculos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="col-xs-3">
                 <label onclick="cambio()">
                      <input  name="c1" type="checkbox" id="toggle" checked data-toggle="toggle" data-on="Activos" data-off="Inactivos" data-onstyle="success" data-offstyle="danger">
                  </label>
                </div>



              <div style="overflow-y: scroll;height:400px; width: 99%">
              <table id="example" class="table table-bordered table-striped" >
                <thead>

                <tr>
                  <th>Id</th>
                  <th>Patente</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Año</th>
                  <th>Seguro al dia</th>
                  <th>Tipo</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody id='lista'> 
                  

                  <?php


                    include('listarvehiculos.php');


                  ?>


                </tbody>
                <tfoot>
                <tr>
                   <th>Id</th>
                  <th>Patente</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Año</th>
                  <th>Seguro al dia</th>
                  <th>Tipo</th>
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





<script>

function cambio() {

var valor= $('#toggle').prop('checked');

if (valor) {

	var valor2=1;

} else {

	var valor2=0;

}


var url = "listarvehiculos.php";
  $.ajax({                                       
     url: url,                     
     data:{"valor": valor2}, 
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
	 
    
};


function sendId(id){  
  
        var url = "pages/EditVehiculo.php";
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

function deshabilitar(){  
  
        var url = "pages/EditVehiculo.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data:{"id": id}, 
           success: function(data)             
           {
             alert(data);               
           }
       });
}

function eliminar(id){

      Swal.fire({
      title: '¿Desea eliminar esta vehiculo?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar'
      }).then((result) => {
        if (result.value) {

          var url = "deletevehiculo.php";
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