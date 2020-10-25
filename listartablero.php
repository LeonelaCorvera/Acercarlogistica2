
<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


	$consulta="SELECT c.idChofer,c.nombre,c.Apellido,c.disponibilidad,t.descripcion, count(vi.idViaje) as cant
				FROM chofer c 
				join vehiculo v on c.idVehiculo=v.idVehiculo
				join tipodevehiculo t on v.idTipoDeVehiculo=t.idTipoDeVehiculo
				left join viaje vi on vi.Chofer_idChofer=c.idChofer
				where c.flagBaja=1
				group by c.idChofer
				order by fecha_ultima_disponibilidad asc";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		if ($fila['disponibilidad']==1 or $fila['disponibilidad']==(-1)) {
			
		
				if ($fila['disponibilidad']==1) {
					$color="<div class='info-box bg-green'>";
				}else if ($fila['disponibilidad']==(-1)){
					$color="<div class='info-box bg-yellow'>";
				}
				
				if ($fila['descripcion']=='auto') {
					$vehiculo="<i class='fa fa-car'>";
				} else if ($fila['descripcion']=='camioneta chica'){
					$vehiculo="<i class='fa fa-bus'>";
				}else if ($fila['descripcion']=='camioneta mediana'){
					$vehiculo="<i class='fa fa-bus'>";
				}else if ($fila['descripcion']=='camioneta grande'){
					$vehiculo="<i class='fa fa-bus'>";
				}else if ($fila['descripcion']=='camion chico'){
					$vehiculo="<i class='fa fa-truck'>";
				}else if ($fila['descripcion']=='moto'){
					$vehiculo="<i class='fa fa-motorcycle'>";
				}

				echo "<div class='col-md-3 col-sm-6 col-xs-12'>
		          ".$color."
		            
		            <span class='info-box-icon'>".$vehiculo."</i></span>

		            <div class='info-box-content'>
		              <span class='info-box-text'>"."$fila[idChofer]"." - "."$fila[nombre]"." "."$fila[Apellido]"."</span>
		              <span class='info-box-text'>"."$fila[descripcion]"."</span>";

		              if ($fila['disponibilidad']==1) {
		              	 echo "<button type='button' value='"."$fila[idChofer]"."' class='btn btn-light' data-toggle='modal' data-target='#myModal'  onclick='hola("."$fila[idChofer]".")' style='color:black';><span>
		                 "."$fila[cant]"." viajes
		                <i class='fa fa-arrow-circle-right'></i>
		                  </span></button>";
		              }
		            


		                  if ($fila['disponibilidad']==(-1)){
			               echo" <button type='button' class='btn btn-warning btn-circle pull-right' onclick='llego("."$fila[idChofer]".")'>
				              <i class='fa fa-hand-paper-o'></i>
	                    	</button>";
	                    	}


		            echo"</div>

		          </div>

		      </div>";
      	}

	}

	foreach($resultado as $fila){

		if ($fila['disponibilidad']==0) {
			
		
				if ($fila['disponibilidad']==0){
					$color="<div class='info-box bg-red'>";
				}
				
				if ($fila['descripcion']=='auto') {
					$vehiculo="<i class='fa fa-car'>";
				} else if ($fila['descripcion']=='camioneta chica'){
					$vehiculo="<i class='fa fa-bus'>";
				}else if ($fila['descripcion']=='camioneta mediana'){
					$vehiculo="<i class='fa fa-bus'>";
				}else if ($fila['descripcion']=='camioneta grande'){
					$vehiculo="<i class='fa fa-bus'>";
				}else if ($fila['descripcion']=='camion chico'){
					$vehiculo="<i class='fa fa-truck'>";
				}else if ($fila['descripcion']=='moto'){
					$vehiculo="<i class='fa fa-motorcycle'>";
				}

				echo "<div class='col-md-3 col-sm-6 col-xs-12'>
		          ".$color."
		            
		            <span class='info-box-icon'>".$vehiculo."</i></span>

		            <div class='info-box-content'>
		              <span class='info-box-text'>"."$fila[idChofer]"." - "."$fila[nombre]"." "."$fila[Apellido]"."</span>
		              <span class='info-box-text'>"."$fila[descripcion]"."</span>

		                <button type='button' class='btn btn-danger btn-circle pull-right' onclick='activar("."$fila[idChofer]".")'>
			               <i class='fa fa-check'></i>
	                    </button>
		            </div>

		          </div>

		      </div>";
      	}

	}


?>