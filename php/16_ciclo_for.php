<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo (for)</title>
	<style>
		div {
			height: 20px;
			margin-bottom: 4px;
			padding: 4px;
			width: 200px;
		}
	</style>
</head>
<body>
	<h1>Ciclo (for)</h1>
	<hr>

	<?php 
		// Imprimir 100 colores desde rojo hasta negro.

		for ($i=100; $i >= 0 ; $i--) { 
			echo "<div style='background-color: rgb(".$i."%,0%,0%)'></div>";
		}
	?>
</body>
</html>