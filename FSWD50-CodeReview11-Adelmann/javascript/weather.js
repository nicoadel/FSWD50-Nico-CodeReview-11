$(document).ready(function(){
	$('#submitWeather').click(function(){

		var city = $("#city").val();

		if (city != ''){

				$.ajax({

					url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + '&units=metric' + '&APPID=9ceba91546cff5ce6345f373a4f9e701',
					type: "GET",
					dataType: "jsonp",
					success: function(data){
						console.log(data);
						$('#show').html('<div class="card"><div class="card-body"><h1 class="card-title">'+data.name+' --- '+data.sys.country+'</h1><p class="card-text">The Weather Type is: '+data.weather[0].description+'</p><p class="card-text">The Temperature is between: '+data.main.temp_min+'C - '+data.main.temp_max+'C</p><p class="card-text">The Average Temperature is: '+data.main.temp+'C</p><p class="card-text">Humidity levels are at: '+data.main.humidity+'%</p></div></div>');

					}
				})
		}
		else
		{
			$('#error').html('Please enter an city!')
		}
	});
	$('#submitCoordinates').click(function(){

		var city = $("#city").val();

		if (city != ''){

				$.ajax({

					url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + '&units=metric' + '&APPID=9ceba91546cff5ce6345f373a4f9e701',
					type: "GET",
					dataType: "jsonp",
					success: function(data){
						console.log(data);
						$('#show').html('<div class="card"><div class="card-body"><h1 class="card-title">'+data.name+' --- '+data.sys.country+'</h1><p class="card-text">Latitude: '+data.coord.lat+'</p><p class="card-text">Longitude: '+data.coord.lon+'</p></div></div>');

					}
				})
		}
		else
		{
			$('#error').html('Please enter an city!')
		}
	});

});
