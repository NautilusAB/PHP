<?php
	$x = 1;
	$y = 1;
	$c = 0;
	$r = $_GET['numb'];		
	$bool = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP_registration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
	<body>
		<?php
			echo 'Ваше число = ' . $r . "<br/>";
			while($bool == 0 || $x != $r){
				if ($x > $r){
				echo 'Задуманное число НЕ входит в числовой ряд.';
				break;
				}elseif($r == $x){
					echo 'Задуманное число входит в числовой ряд.';
					break;
				}else{
					$c = $x;
					$x = $x + $y;
					$y = $c;
				}
			}		
			// Это же числа Фибоначи!!!
		?>	
		<p>Конец!</p>
	</body>
</html>