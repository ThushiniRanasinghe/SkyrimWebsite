
function initialize() {
  var latlng = new google.maps.LatLng(6.916756,79.865499);
  
   var latlng_02 = new google.maps.LatLng(6.931246,79.846922);
  var mapOptions = {
    zoom: 10,
    center: latlng,
	center: latlng_02
	
  }
  var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

  var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      title: 'SKYRIM Head Office'
  });
  var marker_02 = new google.maps.Marker({
	  position: latlng_02,
      map: map,
      title: 'SKYRIM Alexander Place'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
