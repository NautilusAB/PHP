<?php 

	// Объявление переменных и массивов.
	
	$pos= 0;
	$i = 0;
	$finishWord = array();
	$firstWord = array();
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
				$allWord[] = explode(' ', $w2);
			}
	  }
	}
	
	// Затем названия разделил на 2 массива. На 1-ую и 2-ую часть названия.
	
	foreach($allWord as $k => $n){
	  foreach($allWord[$k] as $k2 => $n2){
	    if ($k2 != 0){
				$secondWord[] = $n2;
			}
			else{
				$firstWord[] = $n2;
			}
		}
	}
	
	// Перемешал все значения в массивах.
	
	shuffle($secondWord);
	
	// Соединение 1-ой и 2-ой части названий
	
	for($i = 0; count($firstWord) > $i; $i++){
		$a = $firstWord[$i];
		$b = $secondWord[$i];
		$a .= " " . $b;
		$finishWord[] = $a;
	}
	
	// Заполнение массива
	
	foreach($continents as $k => $n){
		foreach($continents[$k] as $k2 => $n2){
			foreach($finishWord as $k3 => $n3){
				$pos = stristr($n2 , ' ', true);
				$pos2 = stristr($n3 , ' ', true);
				if($pos == $pos2){
					$unrealAnimals[$k][] = $n3;
				}
			}
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