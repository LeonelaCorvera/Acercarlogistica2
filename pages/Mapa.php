<div id="resp">


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>




   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

   <!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>

<style type="text/css">

  #mapid { 
    height: 510px; 
  }

  </style>


<script src="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.umd.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css"/> 



     <div class="box-body">


        <div id="mapid"></div>

   
    </div>
 <!-- -------------------------------------------- --> 

    <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Viajes Pendientes</h3>

                   <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" ><i class="fa fa-plus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="display: none;">

                  <label>Chofer:</label>
                 <input type="text" name="chofer" id="chofer" value="3" disabled>
                  <button type="button" class="btn btn-primary pull-right" onclick="asignar()">Asignar</button>

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

                            include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';
                            include('listarviajesasignados.php');


                          ?>
                        </tbody>
                        
                    </table>
                   </div>

                  </div>
                  
                </div>
             
              </div>
          
            </div>
      
          </div>


 <!-- -------------------------------------------- --> 




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


var customIcon = new L.Icon({
  iconUrl: 'auto.ico',
  iconSize: [50, 50],
  iconAnchor: [25, 50]
});




var marker = L.marker([-34.6629733, -58.4873151], {icon: customIcon}).bindPopup("Nombre del chofer").on('click', onClick);
marker.addTo(mymap);

var marker = L.marker([-34.6267979, -58.4624398], {icon: customIcon}).bindPopup("Nombre del chofer").on('click', onClick);
marker.addTo(mymap);

var marker = L.marker([-34.6359974, -58.4696911], {icon: customIcon}).bindPopup("Nombre del chofer").on('click', onClick);
marker.addTo(mymap);

var marker = L.marker([-58.5113091, -58.5113091], {icon: customIcon}).bindPopup("Nombre del chofer").on('click', onClick);
marker.addTo(mymap);

var marker = L.marker([-34.6203091, -58.5121452], {icon: customIcon}).bindPopup("Nombre del chofer").on('click', onClick);
marker.addTo(mymap);

var marker = L.marker([-34.5987189, -58.510027], {icon: customIcon}).bindPopup("Nombre del chofer").on('click', onClick);
marker.addTo(mymap);



function onClick(e) {

  alert("Listado de viajes pedientes");

}

</script>
