<?php 

	$path = [
				[ "lat" => 3.394859262399776,  "lng" => -76.54692005009653],
				[ "lat" => 3.3897612849025642, "lng" => -76.54702733845713],
				[ "lat" => 3.3897184446416433, "lng" => -76.5417272934437],
				[ "lat" => 3.394580802138408,  "lng" => -76.54035400242807]
			];

	$path2 = [
				[ "lat" => 3.425711395869281,  "lng" => -76.5090698361372],
				[ "lat" => 3.4353393592592427, "lng" => -76.52479067599914],
				[ "lat" => 3.4486625363477277, "lng" => -76.51530790265146],
				[ "lat" => 3.437353335172304,  "lng" => -76.49882841046396]
			];

	echo "<script>var pathSI = ".json_encode($path).";</script>";
	echo "<script>var pathNO = ".json_encode($path2).";</script>";

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubicación dentro de poligono</title>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style>
    	
		#map {
		  height: 100%;
		}

		/* Optional: Makes the sample page fill the window. */
		html,
		body {
		  height: 100%;
		  margin: 0;
		  padding: 0;
		}

		.custom-map-control-button {
		  appearance: button;
		  background-color: #fff;
		  border: 0;
		  border-radius: 2px;
		  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
		  cursor: pointer;
		  margin: 10px;
		  padding: 0 0.5em;
		  height: 40px;
		  font: 400 18px Roboto, Arial, sans-serif;
		  overflow: hidden;
		}
		.custom-map-control-button:hover {
		  background: #ebebeb;
		}

    </style>
  </head>
  <body>
    <div id="map"></div>	
</body>

	<script src="static/js/map.js" type="text/javascript" charset="utf-8" async></script>
 	<script src="https://maps.googleapis.com/maps/api/js?key=API-KEY&callback=initMap&libraries=geometry&v=weekly"
      async
    ></script>

</html>