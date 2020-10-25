<section class="content">
		<div class="row">
		        <div class="col-md-4">
		          <div class="box">
		            <div class="box-header with-border">
		              <h3 class="box-title">Perfiles</h3>

		               <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">

		<form action="../insertarperfil.php" method="POST" id="f1">	

			            	<div class="form-group" style="width: 89%;">
					            <label>Descripcion:</label>
					            <input type="text" name="nombre" class="form-control pull-right" id=nombre>
				            </div>
				             <br>
				             <br>
			            	<div class="form-group" style="width: 89%;">
					            <label>Tipo de perfil:</label>
					            <select class="form-control select2" name="tipo" id="tipo">
					               <option>Seleccionar</option>
					               <option value="Administrador">Administrador</option>
					               <option value="Operador">Operador</option>
					               <option value="Cliente">Cliente</option>
					            </select>
				             </div>

				             <br>

				            <div class="box-footer">
	                   			<button type="button" class="btn btn-primary pull-right" onclick="insertar()">Guardar</button>
	              			</div>


			             
		            </div>
		         
		            <!-- /.box-footer -->
		          </div>
		          <!-- /.box -->
		        </div>
		        <!-- /.col -->

		 	<div class="col-md-8">
		          <div class="box">
		            <div class="box-header with-border">
		              <h3 class="box-title">Permisos</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            	<label class="form-check-label pull-right">Todos</label>
		            	<input class="form-check-input pull-right" type="checkbox" value="todo" id="todo" name="todo">

		            	<br>
		             <div>
		              	<div class="box-body chat" style="overflow-y: scroll; height:400px; width: 99%;">
		              

		              		<?php


			                    include('listarfunciones.php');


			                  ?>


		              	</div>
		       			<br>

		             </div>
		              <!-- /.row -->
		            </div>
		            <!-- /.box-footer -->
		          </div>
		          <!-- /.box -->
		        </div>


		        <!-- /termina row --> 
		     </div>
		 </form>
     

</section>

<script type="text/javascript">

	$(document).ready(function(){
	
		$("#todo").on("click", function() {
		 $(".case").prop("checked", this.checked);
		});

		// if all checkbox are selected, check the selectall checkbox and viceversa
		$(".case").on("click", function() {
		  if ($(".case").length == $(".case:checked").length) {
		    $("#todo").prop("checked", true);
		  } else {
		    $("#todo").prop("checked", false);
		  }

	});


	function insertar(){

		var funciones = [];
		var nombre=$("#nombre").val();
		var tipo=$("#tipo").val();

		$("input[name='grupo']:checked").each(function () {
		
		funciones.push(($(this).attr("value")));
		});


		//alert(nombre+","+tipo+",("+funciones+")");

		var url = "insertarperfil.php";
	        $.ajax({                                       
	           url: url,                     
	           data:{"funciones": funciones,"nombre": nombre, "tipo": tipo}, 
	           method : 'post',
	           dataType : 'json',
	           success: function(data)             
	           {
	             console.log(data);             
	           },
	           error: function(data)             
	           {
	             console.log(data);             
	           }
	         });
		
	}



</script>