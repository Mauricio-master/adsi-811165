<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matrices</title>
</head>
<body>
	<h1>Matrices</h1>
	<hr>

	<?php 

		// La forma larga (incorrecta)
		$vh1 = "Volkswagen";
		$vh2 = "Renault";
		$vh3 = "Chevrolet";
		$vh4 = "Mazda";
		$vh5 = "Ford";

		// Numéricos
		// La forma corta (correcta) - Indices Automáticos
		$vehiculos = array('Volkswagen', 'Renault', 'Chevrolet', 'Mazda', 'Ford');

		// Indices Manuales
		$vehiculos[5] = 'Kia';
		$vehiculos[6] = 'Fiat';
		$vehiculos[7] = 'Toyota';
		$vehiculos[8] = 'Hyundai';

		echo "<h3>Numéricos:</h3>";
		var_dump($vehiculos);

		echo "<br><br> Mi vehículo favorito es: ".$vehiculos[0];

		// Asociativos
		$referencias = array('Volkswagen' => 'Golf',
							 'Renault'    => 'Duster',
							 'Chevrolet'  => 'Traker',
							 'Mazda'      => 'CX6',
							 'Ford'       => 'Fusion'
							 );
		$referencias['kia']     = 'Picanto'; 
		$referencias['Fiat']    = 'Palio'; 
		$referencias['Toyota']  = 'Prado'; 
		$referencias['Hyundai'] = 'i30'; 

		echo "<h3>Asociativos:</h3>";
		var_dump($referencias);

		echo "<br><br> Mi referencia de vehículo favorito es: ".$referencias['Ford'];


		// Multidimensionales
		$familias = array(
				'Stark'     => array('Eddard', 'Robb', 'Sansa', 'Arya', 'Brandon', 'Rickon'),
				'Targaryen' => array('Aegon', 'Aenys', 'Daenerys', 'Maegor'),
				'Lannister' => array('Tywin', 'Tyrion', 'Cercei', 'Jaime'),
				'Baratheon' => array('Robert', 'Renly', 'Tommen', 'Stannis')
			);

		echo "<h3>Multidimensionales:</h3>";
		var_dump($familias);

		echo "<br><br>El integrante de la familia de GOT es: ".$familias['Lannister'][1];


	?>
</body>
</html>