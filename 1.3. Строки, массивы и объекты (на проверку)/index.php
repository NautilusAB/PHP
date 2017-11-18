<?php 

	// Объявление переменных и массивов.
	
	$pos= 0;
	$i = 0;
	$arr = array();
	$secondWord = array();
	$allWord = array();
	$continents = array(
		"Africa" => array("Loxodonta", "Struthio camelus", "Okapia johnstoni", "Buselaphus oreas"),
		"Eurasia" => array("Bufotes viridis" , "Lissotriton vulgaris", "Hyla savignyi", "Salamandrella keyserlingii"),
		"America" => array("Canis lupus", "Vulpes macrotis", "Puma concolor", "Mephitis mephitis"),
		"Australia" => array("Burramys parvus", "Dactylopsila palpator", "Potorous longipes", "Macropus bernadus")
	);
	$unrealAnimals = array();
	
	//Здесь я отсеивал названия с 2 словами.
	
	foreach($continents as $n => $w){
	  foreach($continents[$n] as $n2 => $w2){
	    if(strpos($w2, ' ')){
				$arr = explode(' ', $w2);
				$allWord[$n][] = $arr[0];
				$secondWord[] = $arr[1];
			}
		}
	}
		
	// Перемешал все значения в массивах.
	
	shuffle($secondWord);
	
	// Добавляем 2 часть названия в массив.
	
	foreach($allWord as $k => $n){
		foreach($allWord[$k] as $k2 => $n2){
			$n2 .= ' ' . $secondWord[$i];
			$unrealAnimals[$k][] = $n2; 
			$i++;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP_registration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
		<h1>Ниже будут выведены все континеты и (РЕАЛЬНЫЕ) животные которые обитают в них.</h1>
			<?php	
			
			// Тут я вывел на страницу названия реальных животных по правилам пунктуации.
			
				foreach($continents as $k => $v){
					echo ('<h2>'. $k .'</h2>');
					foreach($continents[$k] as $k_2 => $v_2){ 
						if($k_2 == count($continents[$k]) - 1){
							echo($v_2 . '.');
						}
						else{
							echo($v_2 . ', ');
						}
					}	
				}	
			?>
		<br />
		<h1>Ниже будут выведены все (НЕРЕАЛЬНЫЕ) животные.</h1>	
		<?php
		
		// Вывод нереальных животных.
		
			foreach($unrealAnimals as $k => $n){
				echo("<h2>" . $k . "</h2>");
				foreach($unrealAnimals[$k] as $k2 => $n2){
					if(count($unrealAnimals[$k]) - 1 == $k2){
						echo ($n2 . '.');
					}else{
						echo($n2 . ', ');
					}
				}
			}		
		?>
	</body>
</html>