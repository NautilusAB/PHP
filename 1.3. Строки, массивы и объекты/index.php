<?php 

	// ���������� ���������� � ��������.
	
	$firstWord = array();
	$firstWord_assot = array();
	$secondWord = array();
	$allWord = array();
	$unrealAnimals = array();
	$unrealAnimals = array();
	$continents = array(
		"Africa" => array("Loxodonta", "Struthio camelus", "Okapia johnstoni", "Buselaphus oreas", "Portax pictus", "Gazella dorcas", "Viverra", "Hexaprotodon liberiensis", "Potamochoerus porcus", "Colobus guereza", "Giraffa sivalensis", "Panthera pardus", "Acinonyx", "Phacochoerus africanus", "Ceratotherium simum"),
		"Eurasia" => array("Bufotes viridis" , "Lissotriton vulgaris", "Hyla savignyi", "Salamandrella keyserlingii", "Bombina orientalis", "(Pteromys volans", "Sicista napaea", "Phodopus sungorus", "Dicrostonyx torquatus", "Arvicola", "Microtus mujanensis", "Martes", "Mustela lutreola", "Meles amurensis", "Equus ferus"),
		"America" => array("Canis lupus", "Vulpes macrotis", "Puma concolor", "Mephitis mephitis", "Martes americana", "Odobenus rosmarus", "Pusa hispida", " 	Ursus arctos", "Eubalaena glacialis", "Ovibos moschatus", "Odocoileus hemionus", "Pecari tajacu", "Tadarida brasiliensis", "Myotis sodalis", "Sorex dispar"),
		"Australia" => array("Burramys parvus", "Dactylopsila palpator", "Potorous longipes", "Macropus bernadus", "Petrogale lateralis", "Dendrolagus goodfellowi", "Echymipera rufescens", "Sminthopsis aitkeni", "(Parantechinus", "Tachyglossus aculeatus", "Thylacinus cynocephalus", "Phascolarctos cinereus", "Myrmecobius fasciatus", "Myrmecobius fasciatus", "Ningaui ridei")
	);
	
	//����� � �������� �������� � 2 �������.
	
	foreach($continents as $n => $w)
	{
	  foreach($continents[$n] as $n2 => $w2)
	  {
	    if(strpos($w2, ' '))
		{
		  $allWord[] = explode(' ', $w2);
		}
	  }
	}
	
	// ����� �������� �������� �� 2 �������. �� 1-�� � 2-�� ����� ��������.
	
	foreach($allWord as $k => $n)
	{
	  foreach($allWord[$k] as $k2 => $n2){
	    if ($k2 == 0){
		  $firstWord[] = $n2;
	    }else{
	      $secondWord[] = $n2;
	    } 
	}
	}
	
	// ��������� ��� �������� � ��������.
	
	shuffle($firstWord);
	shuffle($secondWord);
	
	// ����� ��������� 2-� ����� �������� � 1, ��� ���� 1 ����� �������� �������� 1-��.
	
	while(count($secondWord) != $i)
	{
	  $a = $firstWord[$i];
	  $b = $secondWord[$i];
	    if($i != 0){
	      $unrealAnimals[] = $a . " " . $b;
		}  
	  $i++;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP_registration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
		<h1>���� ����� �������� ��� ��������� � (��������) �������� ������� ������� � ���.</h1>
			<?php
			
			// ��� � ����� �� �������� �������� �������� �������� �� �������� ����������.
			
				foreach($continents as $k => $v)
				{
					echo ('<h2>'. $k .'</h2>');
					
					foreach($continents[$k] as $k_2 => $v_2)
					{ 
						if($k_2 == count($continents[$k]) - 1){
							echo($v_2 . '.');
						}
						else
						{
							echo($v_2 . ', ');
						}
					}	
				}
				
				
			?>
		<br />
		<h1>���� ����� �������� ��� (����������) ��������.</h1>	
		<?php
		
		// ����� ���������� ��������.
		
			foreach($unrealAnimals as $k => $n){
				if(count($unrealAnimals) - 1 == $k){
					echo ($n . '.');
				}else{
					echo($n . ', ');
				}
			}
		?>
		
	</body>
</html>