<section class="content">
		<div class="row">
		        <div class="col-md-4">
		          <div class="box">
		            <div class="box-header with-border">
		              <h3 class="box-title">Choferes</h3>

		               <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">

		            	<div class="form-group" style="width: 89%;">
				            <label>Tipo de vehiculo:</label>
				            <select class="form-control select2" id="yourSelect" name="tipo">
				               <option value='0'>Seleccionar</option>
			                      <?php

			                      	include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

			                          $consulta="SELECT * FROM tipodevehiculo;";
			                          $resultado=db_query($consulta);

			                          foreach($resultado as $fila){

			                            echo "<option value='".$fila[idTipoDeVehiculo]."'>".$fila[descripcion]."</option>";
			                          }
			                      ?>
				            </select>
			             </div>

		              <div class="row">
		                
		              	<div class="box-body chat" style="overflow-y: scroll; height:360px; width: 98%;">

		              		<table  class="table table-bordered table-striped">
			                <thead>

				                <tr>
					                <th></th>
					                <th>Id</th>
					                <th>Chofer</th>
				                </tr>
				                </thead>
				                <tbody>

				                <div id="lista">
					                  <?php

					                  	
					                    include('choferespresentes.php');


					                  ?>
				                 </div>
				                </tbody>
				               
			              </table>

		              	</div>

		              </div>
		              <!-- /.row -->
		            </div>
		         
		            <!-- /.box-footer -->
		          </div>
		          <!-- /.box -->
		        </div>
		        <!-- /.col -->

		 	<div class="col-md-8">
		          <div class="box">
		            <div class="box-header with-border">
		              <h3 class="box-title">Viajes pendientes</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            	<button type="button" class="btn btn-warning pull-right" onclick="asignar()">Asignar</button>
		              <div class="row" >
		              	<div class="box-body chat" style="overflow-y: scroll; height:400px; width: 99%;">
		                
		              		<table  class="table table-bordered table-striped">
			                <thead>

				                <tr>
				                  <th><input type="checkbox"></th>
				                  <th>Id</th>
				                  <th>Fecha</th>
				                  <th>Hora</th>
				                  <th>Comision Paga</th>
				                  <th>Valor Viaje</th>
				                  <th>Servicio</th>
				                  <th>Chofer</th>
				                  <th>Cliente</th>
				                  <th>kms</th>
				                  <th>Fecha carga</th>
				                  <th>Estado</th>
				                </tr>
				                </thead>
				                <tbody>

				                  <?php

				                    include('listarviajespendientes.php');


				                  ?>
				                </tbody>
				               
			              </table>



		              	</div>
		       
		              </div>
		              <!-- /.row -->
		            </div>
		            <!-- /.box-footer -->
		          </div>
		          <!-- /.box -->
		        </div>











		        <!-- /termina row --> 
		     </div>

		<div class="row">
		        <div class="col-md-12">
		          <div class="box">
		            <div class="box-header with-border">
		              <h3 class="box-title">Viajes Asignados</h3>

		               <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            	<button type="button" class="btn btn-danger pull-right" onclick="reasignar()">Reasignar</button>
		            	<button type="button" class="btn btn-danger pull-right" onclick="cambiar_estado('ASIGNADO')" style="background-color: #088A68; border-color: #088A68;" >Asignado</button>
		            	<button type="button" class="btn btn-danger pull-right" onclick="cambiar_estado('EN CURSO')" style="background-color: #BF00FF; border-color: #BF00FF;" >En curso</button>
		            	<button type="button" class="btn btn-danger pull-right" onclick="cambiar_estado('FINALIZADO')" style="background-color: #FE9A2E; border-color: #FE9A2E;" >Finalizado</button>
		              <div class="row">
		                <div class="box-body chat" color="white" style="overflow-y: scroll; height:400px; width: 99%;">
		              	 <table id="example2" class="table table-bordered table-striped">
			                <thead>

				                <tr>
				                  <th><input type="checkbox"></th>	
				                  <th>Id</th>
				                  <th>Fecha</th>
				                  <th>Hora</th>
				                  <th>Comision Paga</th>
				                  <th>Valor Viaje</th>
				                  <th>Servicio</th>
				                  <th>Chofer</th>
				                  <th>Cliente</th>
				                  <th>kms</th>
				                  <th>Fecha carga</th>
				                  <th>Estado</th>
				                </tr>
				                </thead>
				                <tbody >

				                  <?php

				                    include('listarviajesasignados.php');


				                  ?>
				                </tbody>
				                
			              </table>
			             </div>

		              </div>
		              <!-- /.row -->
		            </div>
		         
		            <!-- /.box-footer -->
		          </div>
		          <!-- /.box -->
		        </div>
		        <!-- /.col -->
		        <!-- /termina row --> 
		      </div>


     

</section>

<script type="text/javascript">

$(document).ready(function(){
	$("select#yourSelect").change(function(){
            alert($("select#yourSelect").val());
        });

});

function cambiar_estado(estado){

	var valoresCheck="";
	var cont=0;

	$("input[type=checkbox]:checked").each(function(){
	    
	    if (cont>0) {
	    	valoresCheck+=" , ";
	    }
	    valoresCheck+=this.value;
	    cont++;
	});

	var url = "cambiarestado.php";
        $.ajax({                                       
           url: url,                     
           data:{"ids": valoresCheck,"estado": estado}, 
           method : 'post',
           dataType : 'json',
           success: function(data)   
           {
           	alert("hola");
             //location.reload();             
           },
           error: function(data)             
           {	alert(data);
           	console.log(data);
             //location.reload();            
           }
         });

}

function reasignar(){

	var chofer = $('input[name="grupo"]:checked').val();
	var valoresCheck="";
	var cont=0;

	$("input[type=checkbox]:checked").each(function(){
	    
	    if (cont>0) {
	    	valoresCheck+=" , ";
	    }
	    valoresCheck+=this.value;
	    cont++;
	});


	var url = "reasignar.php";
        $.ajax({                                       
           url: url,                     
           data:{"ids": valoresCheck,"chofer": chofer}, 
           method : 'post',
           dataType : 'json',
           success: function(data)             
           {
             location.reload();             
           },
           error: function(data)             
           {
             location.reload();            
           }
         });

}

function asignar(){

	var chofer = $('input[name="grupo"]:checked').val();
	var valoresCheck="";
	var cont=0;

	$("input[type=checkbox]:checked").each(function(){
	    
	    if (cont>0) {
	    	valoresCheck+=" , ";
	    }
	    valoresCheck+=this.value;
	    cont++;
	});


	var url = "asignar.php";
        $.ajax({                                       
           url: url,                     
           data:{"ids": valoresCheck,"chofer": chofer}, 
           method : 'post',
           dataType : 'json',
           success: function(data)             
           {
             location.reload();             
           },
           error: function(data)             
           {
             location.reload();            
           }
         });

}


</script>