<?php
	$decode;
	$json = array(
	'firstName' => 'Артур',
	'lastName' => 'Бровин',
	'address' => 'г. Алматы, 10-а мкр',
	'phoneNumber' => '84527624652');
	json_encode($json);		
	
	function print_d($a){
	echo ('<pre> ' . var_dump($a) . '</pre>');
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP_JSON</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
	<body>
		<table>
			<?php foreach($json as $n => $k){ ?>
				<tr>
					<td>
						<?php 
								if (count($json))
								echo ('"' . $n . '": "' . $k . '" ');
						?>
					<td>
				</tr>
			<?php } ?>	
		</table>
	</body>
</html>