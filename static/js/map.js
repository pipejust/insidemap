let map;

function initMap() {
	  map = new google.maps.Map(document.getElementById("map"), {
	    center: { lat: 3.3931633, lng: -76.54350819999999 },
	    zoom: 16,
	  });
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          map.setCenter(pos);
		handleLocationResponse(true, map.getCenter());
        }
      );
    } else {
      handleLocationResponse(false, map.getCenter());
    }
}

function handleLocationResponse(browserHasGeolocation,  pos) {
	if(browserHasGeolocation) {                                                                            
		const polygon = new google.maps.Polygon({
		    paths: pathSI,
		    strokeColor: "#FF0000",
		    strokeOpacity: 0.8,
		    strokeWeight: 2,
		    fillColor: "#FF0000",
		    fillOpacity: 0.35,
		});
		var isWithinPolygon = google.maps.geometry.poly.containsLocation(
						      pos,
						      polygon
						    );

		polygon.setMap(map);

		const marker = new google.maps.Marker({
	      position: pos,
	      icon: "static/images/moto.png",
	      map: map,
	    });
		
		if( isWithinPolygon ) {
			alert("Está dentro de la zona");
		} else {
			alert("No está dentro de la zona");
		}
	} else {
		alert("Debe permitir acceder a la ubicación")
	}
}