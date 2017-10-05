<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo (while)</title>
</head>
<body>
	
	<h1>Ciclo (while)</h1>
	<hr>

	<?php 
		// Imprimir los números del 0 al 100 de la
		// siguiente forma: 0.5, 1.5, 2.5, 3.5

		$i = 0.5;
		while ($i <= 100) {
			echo "<p>".$i."</p>";
			$i++;
		}

	?>
</body>
</html>