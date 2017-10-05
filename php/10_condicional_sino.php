<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional SINO</title>
</head>
<body>
	<h1>Condicional SINO</h1>
	<hr>

	<?php 

		$ndia = date('w');

		if($ndia == 0) {
			echo "Hoy es Domingo, feliz fin de Semana";
		}
		else {
			echo "No es fin de semana, a estudiar!";
		}

	 ?>
</body>
</html>