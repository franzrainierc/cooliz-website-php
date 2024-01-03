<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Maps Example</title>
</head>
<body>


<div id="map" style="height: 400px; width: 100%;"></div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvVIxAoM6dAMuIdcw0MaMSD8btKIlao4E&callback=initMap" async defer></script>


<script>

  function initMap() {

    var initialLocation = { lat: 37.7749, lng: -122.4194 };


    var map = new google.maps.Map(document.getElementById('map'), {
      center: initialLocation,
      zoom: 12 
    });


    var marker = new google.maps.Marker({
      position: initialLocation,
      map: map,
      title: 'Hello World!'
    });
  }
</script>

</body>
</html>