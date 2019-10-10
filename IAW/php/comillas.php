<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset='UTF-8'>
	<title>Documento</title>
</head>
<body style="background-color: lightblue">
	<h1 style="text-align: center; font-size: 3EM"> PLANTILLA PHP </h1>
	<hr/>
	<?php
		$p1= 'Aqui se pueden añadir comillas "dobles"<br/>';
		$p2= "Aqui se pueden añadir comillas 'simples'<br/>";
		$p3= "Esta cadena no da error por las \"comillas\"<br/>";

		echo "<h2 style='text-align: center'>'Hoy es " .date ('l, j \d\e F \d\e Y') ."'</h2><br/>";
		echo $p1;
		echo $p2;
		echo $p3;

	?>
</body>
</html>