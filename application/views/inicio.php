<!DOCTYPE html>
<html>
<head>
	<title>Firmas</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>

function initMap() {
  var myLatLng = {lat: 18.45, lng: -69.66};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });

  <?php
  	$CI =& get_instance(); 
  	$rs = $CI->db->query("select * from personas order by id desc limit 10");

  	$datos = $rs->result(); 

  	foreach ($datos as $persona) {
  		# code...
  		echo " myLatLng = {lat: $persona->}, lng: $persona->lon};

  		var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'";
  	}

   ?>
}

  </script>
     </script>
   </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfyc5qD5ZMn-1Qs8j0pX3iXRexMMkQJE4&callback=initMap"></script>

</head>
<body>
<div class="container"> 

	<h1>Lucha Contra la Impunidad</h1>

	</div>
	<div  id= "map"style="width: 500px; height: 300px;background: #cccccc; margin: 0auto;">Mapa</div>

	<a href="<?php echo base_url('App/registro'); ?>" class="btn btn-primary">Registrarse</a>

</body>
</html>