

<div id="resp">


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>




   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

   <!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>


<!-- ruteo -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>


<style type="text/css">

  #mapid { 
    height: 380px; 
  }

  </style>


<script src="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.umd.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css"/> 




<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nueva solicitud</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <form action="insertarviaje.php" method="post">
              <div class="row">
                <div class="col-xs-3">
                  <label>Fecha:</label>
                  <input type="date" class="form-control pull-right" name="fecha" required>
                </div>
                <div class="col-xs-3">
                  <label>Hora:</label>
                  <input type="time" class="form-control pull-right" name="hora" required>
                </div>
            </div>
<br>
<br>

            <div class="row">

                <div class="col-xs-3">
                  <div class="form-group">
                  <label>Cliente:</label>
                  <select class="form-control" name="cliente" id="cliente" required>
                    <option value=''>Seleccionar</option>
                      <?php

                        include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

                          $consulta="SELECT * FROM cliente where estado=1;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idcliente]."'>".$fila[razon_social]."</option>";
                          }
                      ?>
                  </select>
                </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                  <label>Servicio:</label>
                  <select class="form-control" name="servicio" id="servicio" required>
                    <option value=''>Seleccionar</option>
                      <?php

                          $consulta="SELECT * FROM servicio where estado =1;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idServicio]."'>".$fila[descripcion]."</option>";
                          }
                      ?>
                  </select>
                </div>
                </div>

                <div class="col-xs-3">
                  <div class="form-group">
                  <label>Tipo de vehiculo:</label>
                  <select class="form-control" name="tipovehiculo" id="tipovehiculo" required>
                    <option value=''>Seleccionar</option>
                      <?php

                          $consulta="SELECT * FROM tipodevehiculo;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idTipoDeVehiculo]."'>".$fila[descripcion]."</option>";
                          }
                      ?>
                  </select>
                </div>
                </div>
                
            </div>

            
<br>           

            <div class="row">
              <div class="col-xs-12">
                <h4>Origen</h4>
                <hr/> 
              </div>
            </div>

             <div class="row">
              <div class="col-xs-2">
                  <label>Calle:</label>
                  <input type="text" class="form-control" name="calle" id="calle" required>
                </div>
                <div class="col-xs-1">
                  <label>Altura:</label>
                  <input type="text" class="form-control" name="altura" id="altura" required>
                </div>

                <div class="col-xs-1">
                  <label>Piso:</label>
                  <input type="text" class="form-control" name="piso">
                </div>

                <div class="col-xs-1">
                  <label>Depto:</label>
                  <input type="text" class="form-control" name="depto">
                </div>

                <div class="col-xs-2">
                  <label>Localidad:</label>
                  <input type="text" class="form-control" name="localidad" id="localidad" value="ciudad autonoma de buenos aires">
                </div>

                <div class="col-xs-2">
                  <label>Provincia:</label>
                  <input type="text" class="form-control" name="provincia" id="provincia" value="buenos aires">
                </div>
               
                <div class="col-xs-2">
                  <br>
                  <button type="button" class="btn btn-success" onclick="consulta();">Buscar</button>
                </div>
            </div>

            <br>          
             <div class="row">
              
                <div class="col-xs-2">
                  <input type="text"  class="form-control input-sm" name="lat" id="lat" >
                </div>

                <div class="col-xs-2">
                  <input type="text"  class="form-control input-sm" name="lon" id="lon" >
                </div>
             </div>
<br>
<div id="mapid"></div>
<br>


            <div class="row">
              <div class="col-xs-12">
                <h4>Destino</h4>
                <hr/> 
              </div>
            </div>

            <div class="row">
              <div class="col-xs-2">
                  <label>Calle:</label>
                  <input type="text" class="form-control" name="calle2" required>
                </div>
                <div class="col-xs-1">
                  <label>Altura:</label>
                  <input type="text" class="form-control" name="altura2" required>
                </div>

                <div class="col-xs-1">
                  <label>Piso:</label>
                  <input type="text" class="form-control" name="piso2">
                </div>

                <div class="col-xs-1">
                  <label>Depto:</label>
                  <input type="text" class="form-control" name="depto2">
                </div>

                <div class="col-xs-2">
                  <label>Localidad:</label>
                  <input type="text" class="form-control" name="localidad2" id="localidad2" value="Ciudad Autonoma de Buenos Aires">
                </div>

                <div class="col-xs-2">
                  <label>Provincia:</label>
                  <input type="text" class="form-control" name="provincia2" id="provincia2" value="Buenos Aires">
                </div>
               
               
                <div class="col-xs-1">
                  <br>
                  <button type="button" class="btn btn-success" onclick="consulta2();">Buscar</button>
                </div>

                <div class="col-xs-1">
                  <br>
                  <button type="button" class="btn btn-danger" onclick="rutear();">Rutear</button>
                </div>

             </div>
<br>          
             <div class="row">
              <div class="col-xs-2">
                  <input type="text"  class="form-control input-sm" name="lat2" id="lat2" >
                </div>
                <div class="col-xs-2">
                  <input type="text"  class="form-control input-sm" name="lon2" id="lon2" >
                </div>
             </div>
<br><br>
                <div class="row">

                  <div class="col-xs-1">
                    <label>Km:</label>
                    <input type="text" class="form-control" name="km" id="km">
                  </div>
                  
                  </div>

<br><br>
                 <div class="row">

                  <div id="precio">
                      <div class="col-xs-2">
                        <label>Importe:</label>
                        <input type="number" class="form-control"  id="importe">
                      </div>
                      <div class="col-xs-2">
                        <label>Por hora adicional:</label>
                        <input type="number" class="form-control" id="horaAdicional">
                      </div>
                  </div>

                  <div class="col-xs-1">
                    <br>
                    <button type="button" class="btn btn-success " onclick="calcularPrecio()";>Calcular Precio</button>
                  </div>

                </div>

               
<br><br>


               <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" >Guardar</button>
              </div>
        </form>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
<script>


var mymap = L.map('mapid').setView([-34.60721491, -58.4577942], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoibGVvbmVsYWNvcnZlcmE5MCIsImEiOiJja2E3djFnd2YwMXo5MnFtaDA4Z3B6YXgwIn0.A1NhXamH0BoSUjRuanbqKw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);



</script>

<script>

var latitudOrigen=0;
var longitudOrigen=0;
var latitudDestino=0;
var longitudDestino=0;

$(document).ready(function()
{
    $(function () {

    //Date range picker
    $('#reservation').datepicker(

      {
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true,
        }
    );
    //Date range picker with time picker
    $('#hora').datetimepicker();

  })
});
</script>
<script>
function consulta(){  

  var calle=$('#calle').val();
  var altura=$('#altura').val();
  var localidad=$('#localidad').val();
  var provincia=$('#provincia').val();
  
        var url = "consultarcoordenada.php";
        $.ajax({                                       
           url: url,                     
           data:{"calle": calle,"altura":altura, "localidad":localidad, "provincia":provincia }, 
           method : 'post',
           dataType : 'json',
           success: function(data)             
           {
             var valor=Object.values(data); 

             latitudOrigen=data['lat'];
             longitudOrigen=data['lon'];

             $('#lon').val(data['lon']);
             $('#lat').val(data['lat']);

            var marker = L.marker([data['lat'],data['lon']]);
			marker.addTo(mymap);

           },
           error: function(data)             
           {
              alert("error");           
           }
       });
}

function consulta2(){  

  var calle=$('#calle2').val();
  var altura=$('#altura2').val();
  var localidad=$('#localidad2').val();
  var provincia=$('#provincia2').val();
  
        var url = "consultarcoordenada.php";
        $.ajax({                                       
           url: url,                     
           data:{"calle": calle,"altura":altura, "localidad":localidad, "provincia":provincia}, 
           method : 'post',
           dataType : 'json',
           success: function(data)             
           {
             var valor=Object.values(data); 

             latitudDestino=data['lat'];
             longitudDestino=data['lon'];

             $('#lon2').val(data['lon']);
             $('#lat2').val(data['lat']);

            var marker = L.marker([data['lat'],data['lon']]);
			marker.addTo(mymap);

           },
           error: function(data)             
           {
              alert("error");            
           }
       });
}

function rutear(){  

  var control =L.Routing.control({
  waypoints: [
    L.latLng(latitudOrigen, longitudOrigen),
    L.latLng(latitudDestino, longitudDestino)
  ]
}).addTo(mymap);
  
 control.on('routesfound', function(e) {
  var routes = e.routes;
  var summary = routes[0].summary;
  // distance in km
  var num = summary.totalDistance / 1000;

  $('#km').val(num.toFixed(2));
  
});
}

function calcularPrecio(){  

  if ($('#km').val().length != 0) {

     var km=$('#km').val(); 
     var servicio=$('#servicio').val();
     var cliente=$('#cliente').val();  
     var tipovehiculo=$('#tipovehiculo').val(); 

    
     var url = "calcularPrecio.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data:{"km": km, "servicio": servicio, "cliente": cliente, "tipovehiculo": tipovehiculo}, 
           success: function(data)             
           {
             $('#precio').html(data);               
           },
           error: function(data)             
           {
              $('#precio').html(data);            
           }
       });


  }

}




</script>



