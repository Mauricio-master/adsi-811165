<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadenas PHP</title>
</head>
<body>
	<h1>Cadenas PHP</h1>
	<hr>
	<?php 
		$cadena1 = 'ADSI 1132816';
		$cadena2 = "Hola Mundo $cadena1";

		// Concatenar
		$cadena3 = 'Centro de Procesos Industrilaes';
		$cadena4 = 'SENA Regional Caldas';
		$cadenar = $cadena3.' '.$cadena4;
	?> 

	<h2><?=$cadena2?></h2>
	<hr>
	<h3>La cadena: <?=$cadenar?> tiene <?=strlen($cadenar)?> caracteres.</h3>
	<h3>La palabra Procesos en la cadena: <?=$cadenar?> esta en la posición <?=strpos($cadenar, 'Procesos')?></h3>

</body>
</html>