<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo (foreach)</title>
</head>
<body>
	<h1>Ciclo (foreach)</h1>
	<hr>

	<?php 

		$lenguajes = array('Javascript', 'Python', 'Ruby', 'C#', 'Java');

		foreach ($lenguajes as $indice => $valor) {
			echo "<li>".$valor."</li>";
		}

	?>
</body>
</html>