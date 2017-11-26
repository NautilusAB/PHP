<?php
$data; $weather; $arr; $temp_c; $pressure; $humidity; $weather_main;
$Kel = 273; // Кельвин
$data = file_get_contents('http://api.openweathermap.org/data/2.5/forecast?id=1526395&APPID=1e4612ae0fedfaa68882fb46d866e691');
$weather = json_decode($data, true);

	function print_d($arr){
		echo '<pre>';
		var_dump($arr);
		echo '<pre>';
	}
	
	foreach($weather as $arr => $k){
		if ($arr == 'list'){
			foreach($weather[$arr] as $list => $k2){
				if ($list == 0){
					foreach($weather[$arr][$list] as $last_record => $k3){
						if ($last_record == 'main'){
							foreach($weather[$arr][$list][$last_record] as $main => $k4){
								if ($main == 'temp'){
									$temp_c = $k4 - $Kel;
								}
								if ($main == 'pressure'){
									$pressure = $k4;
								}
								if ($main == 'humidity'){
									$humidity = $k4;
								}
							}
						}
						if ($last_record == 'weather'){
							foreach($weather[$arr][$list][$last_record] as $weather_status => $k5){
								foreach($weather[$arr][$list][$last_record][$weather_status] as $description => $k6){
									if ($description == 'main'){
										$weather_main = $k6;
									}
								}
							}
						}
					}
				}
			}
		}
	}
	
	function echo_weather($w){
	echo ('<img src="img/' . $w . '> . <br />');
	echo ('<h3>' . $weather_main . '</h3>' . '<br />');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP_weather</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>
		img{
			border: solid black 3px;
			max-height: 500px;
			max-width: 500px;
		}
	</style>
</head>
	<body>
	<h2>Погода</h2>
<?php
		switch($weather_main) {
		case 'Clear':
			echo ('<img src="img/clearSky.jpg">' . '<br />');
			echo ('<h3>' . $weather_main . '</h3>' . '<br />');
			break;
		case 'Rain':
			echo ('<img src="img/rain.jpg">' . '<br />');
			echo ('<h3>' . $weather_main . '</h3>' . '<br />');
			break;
		case 'Clouds':
			echo ('<img src="img/cloud.jpg">' . '<br />');
			echo ('<h3>' . $weather_main . '</h3>' . '<br />');
			break;
		case 'Snow':
			echo ('<img src="img/snow.jpg">' . '<br />');
			echo ('<h3>' . $weather_main . '</h3>' . '<br />');
			break;	
		default:
			echo 'Ничего';
		}	
	echo '<h2>Давление</h2>';
	echo $pressure . '<br />';
	echo '<h2>Влажность</h2>';
	echo $humidity . '<br />';
?>
	</body>
</html>