<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset='UTF-8'>
	<title>Documento</title>
</head>
<body style="background-color: lightblue">
	<h1 style="text-align: center; font-size: 3EM"> Ejercicio variables </h1>
	<hr/>
	<?php
		$entero= 3;
		$real= -1;
		$string= "hola<br/>";
		$booltrue= true;
		$boolfalse= false;
		$vacia= NULL;

		echo "La variable \$entero contiene $entero <br/> y es de tipo ";
		echo var_dump ($entero). "<br/><br/>";
		echo "La variable \$real contiene $real <br/> y es de tipo ";
		echo var_dump ($real). "<br/><br/>";
		echo "La variable \$booltrue contiene $booltrue <br/> y es de tipo ";
		echo var_dump ($booltrue). "<br/><br/>";
		echo "La variable \$boolfalse contiene $boolfalse <br/> y es de tipo ";
		echo var_dump ($boolfalse). "<br/><br/>";
		echo "La variable \$vacia contiene $vacia <br/> y es de tipo ";
		echo var_dump ($vacia). "<br/><br/>";
	?>
</body>
</html>