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


<script src='https://npmcdn.com/@turf/turf/turf.min.js'></script>



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
 



<script>





	//$('#mapid').bind("click", function(){


		//alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng);


		//var marcadores = [];

		//marcadores.push([-5.6659, 40.9641]);
		//marcadores.push([-5.6659, 40.9641]);

		//console.log(marcadores);
		//alert(marcadores);


	//});





	var map = L.map('mapid', {
		center: [40.96618, -5.66237],
		zoom: 15,
		});


var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng) // Sets the geographical point where the popup will open.
        .setContent("Has hecho click en la coordenada:<br> " +  e.latlng.lat.toString() + "," +  e.latlng.lng.toString()) // Sets the HTML content of the popup.
        .openOn(map); // Adds the popup to the map and closes the previous one. 
}

map.on('click', onMapClick);


 
	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);
 
		var geojson = [
		{
		"type": "Feature",
		 	"geometry": {
		   		"type": "Polygon",
		   		 "coordinates":[[ 
			    	[-5.6659, 40.9641],
					[-5.6664, 40.9669],
					[-5.6616, 40.9660],
					[-5.6611, 40.9637],
					[-5.6659, 40.9641]
				]]
			       },
			"properties": {
		 		"name": "Mi Poligono",
		 		 "title": "Plaza Mayor"
				  }
			}
			      ];
 
 
		coords = []; 
		
			var puntos = L.geoJSON(geojson, {
				pointToLayer: function (feature, latlng) {
						return L.marker(latlng);
					},	
				onEachFeature:  function (feature, layer) {
	            coords.push(feature.geometry.coordinates);
				}				
			});
		
		map.addLayer(puntos);
	
		var geoJsonLayer = L.geoJson().addTo(map);





</script>
