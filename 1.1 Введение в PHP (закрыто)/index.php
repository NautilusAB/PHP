<?php 
	$name = 'Артур';
	$age = '16';
	$year = '19.11.2000';
	$email = 'arti_2000@mail.ru';
	$city = 'Алматы';
	$about = 'Я начинающий PHP мастер. Люблю бабушкны блинчики';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP_registration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel = "stylesheet" href = "style/css.css">
</head>
<body>
	<h1>Hello World!</h1>
	<p>Ниже будет предоставлена вся информация обо мне.</p>
	<table>
		<tr>
			<td>
				<p>Меня зовут:</p>
			</td>
			<td class = "padding-l">
				<?php
					echo($name . ".");
				?>
			</td>
		</tr>
		<tr>
			<td>
				<p>Мне</p>
			</td>
			<td class = "padding-l">
				<?php
					echo($age . ".");
				?>
			</td>
		</tr>
		<tr>
			<td>
				<p>Я родился</p>
			</td>
			<td class = "padding-l">
				<?php
					echo($year);
				?>
			</td>
		</tr>
		<tr>
			<td>
				<p>Мой Email</p>
			</td>
			<td class = "padding-l">
				<?php
					echo '<a href = "https://www.google.ru/search?newwindow=1&ei=0hIHWpa8Camk6ASYkJLQDA&q=php+html&oq=php+html&gs_l=psy-ab.3..0i67k1j0l9.209220.209820.0.210071.4.4.0.0.0.0.211.609.0j1j2.3.0....0...1.1.64.psy-ab..1.3.607....0.bekNINMqp7s">' . $email . '</a>';
				?>
			</td>
		</tr>
		<tr>
			<td>
				<p>Город</p>
			</td>
			<td class = "padding-l">
				<?php
					echo($city);
				?>
			</td>
		</tr>
		<tr>
			<td>
				<p>О себе:</p>
			</td>
			<td class = "padding-l">
				<?php
					echo($about . ".");
				?>
			</td>
		</tr>
	</table>
</body>
</html>