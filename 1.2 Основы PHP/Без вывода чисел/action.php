<?php
	$x = 1;
	$y = 1;
	$c = 0;
	$r = $_GET['numb'];		
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP_registration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
</head>
	<body>
		<?php
			echo 'Ваше число = ' . $r . "<br/>";
			do{
				if ($x > $r){
					echo 'Задуманное число НЕ входит в числовой ряд.';
					exit;
				}elseif($r == $x){
					exit;
				}else{
					$c = $x;
					$x = $x + $y;
					$y = $c;
				}
			}while($x != $r);	
			echo 'Задуманное число входит в числовой ряд.';
		?>	
// Это же числа Фибоначи!!!
	</body>
</html>