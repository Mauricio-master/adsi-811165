<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional SINO SI</title>
</head>
<body>
	<h1>Condicional SINO SI</h1>
	<hr>

	<?php 

		$ndia = date('w');

		if($ndia == 1) {
			echo "Hoy es Lunes";
		}
		elseif($ndia == 2) {
			echo "Hoy es Martes";
		}
		elseif($ndia == 3) {
			echo "Hoy es Miércoles";
		}
		elseif($ndia == 4) {
			echo "Hoy es Jueves";
		}
		elseif($ndia == 5) {
			echo "Hoy es Viernes";
		}
		else {
			echo "Feliz Fin de Semana :) ";
		}

	 ?>
</body>
</html>