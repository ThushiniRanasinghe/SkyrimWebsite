
function initialize() {
  var latlng = new google.maps.LatLng(6.984304, 79.881511);
  
   var latlng_02 = new google.maps.LatLng(6.865185, 79.859850);
  var mapOptions = {
    zoom: 10,
    center: latlng,
	center: latlng_02
	
  }
  var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

  var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      title: 'Bow Bow'
  });
  var marker_02 = new google.maps.Marker({
	  position: latlng_02,
      map: map,
      title: 'Bow Bow'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
