<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
      #map {
        height: 400px;
        width: 400px;
      }
  </style>
</head>
<body>
    <div id="map"></div>

<button onclick="showMap(25.594095, 85.137566)">Show Map</button>  
<button onclick="codeAddress()">Show Map by address</button>  


<script defer type="text/javascript"
    src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries" >
</script>
<script type="text/javascript">
       
    // function showMap(lat, lng) {
    //   const myLatLng = { lat: lat, lng: lng };
    //   const map = new google.maps.Map(document.getElementById("map"), {
    //     zoom: 5,
    //     center: myLatLng,
    //   });

    //   new google.maps.Marker({
    //     position: myLatLng,
    //     map,
    //     title: "Hello Rajkot!",
    //   });
    // }  
    var geocoder;
var map;
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(-34.397, 150.644);
  var mapOptions = {
    zoom: 8,
    center: latlng
  }
  map = new google.maps.Map(document.getElementById('map'), mapOptions);
}

function codeAddress() {
  // var address = document.getElementById('map').value;
  geocoder.geocode( { 'address': }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}
</script>

</body>
</html>