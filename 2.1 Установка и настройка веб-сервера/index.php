<?php
	$url = "text.json";
	$content = file_get_contents($url);
	$json = json_decode($content, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP_JSON</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
	<body>
		<table>
			<?php 
				foreach ($json as $n => $k){ 
					foreach ($json[$n] as $n2 => $k2){
			?>
				<tr>
					<td>
						<?php echo ($n2 . ': ' . $k2); ?>
					</td>
				</tr>
				<?php }} ?>	
		</table>
	</body>
</html>