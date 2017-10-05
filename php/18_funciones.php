<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones</title>
</head>
<body>
	<h1>Funciones</h1>
	<hr>
	<?php 

		// Función sin parámetros
		function saludo() {
			echo "<h2> Hola mundo ADSI </h2>";
		}
		saludo();

		// Función con parámetros
		function bienvenida($nombre, $titulacion) {
			echo "Bienvenido: ".$nombre;
			echo "<br>";
			echo "Titulación: ".$titulacion;

		}
		bienvenida('Roberto Carlos', 'Analisis y Desarrollo de SI');

		// Función retorna valor
		function tiempoformacion($tiempo) {
			return $tiempo." Meses";
		}
		echo "<br>Su tiempo de formación es: ".tiempoformacion(6);

		// Función con parámetros opcionales
		function centroformacion($centro, $regional = 'Caldas') {
			return "Centro de Formación: ".$centro."<br> Regional: ".$regional;
		}
		echo "<br> ".centroformacion('Comercio y Servicios');

	?>
</body>
</html>