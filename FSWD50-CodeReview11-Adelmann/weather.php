<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
		<h3 class="text-center text-primary">Weather/Coordinates</h3>
	
</div>

<div class ="row form-group form-inline">
	<input type="text" name="city" id="city" class="form-control" placeholder="City Name">
	<button id="submitWeather" class="btn btn-primary">Search City</button>
	<button id="submitCoordinates" class="btn btn-primary">Get Coordinates</button>
</div>
<div id="error"></div>
<div id="show"></div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="javascript/weather.js"></script>




</body>
</html>