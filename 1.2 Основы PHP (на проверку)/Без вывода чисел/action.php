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
			echo '���� ����� = ' . $r . "<br/>";
			do{
				if ($x > $r){
					echo '���������� ����� �� ������ � �������� ���.';
					exit;
				}elseif($r == $x){
					exit;
				}else{
					$c = $x;
					$x = $x + $y;
					$y = $c;
				}
			}while($x != $r);	
			echo '���������� ����� ������ � �������� ���.';
		?>	
// ��� �� ����� ��������!!!
	</body>
</html>