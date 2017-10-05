<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excepciones (try, throw, catch)</title>
</head>
<body>
	<h1>Excepciones (try, throw, catch)</h1>
	<hr>

	<?php 

	function verificarEdad($edad) {
		if($edad >= 18) {
			echo "<h3>Es mayor de edad!</h3>";
		} else {
			throw new Exception("Usted no puede votar");
		}
	}

	try {
		verificarEdad(15);
	} catch (Exception $e) {
		echo "<h3>Error: ".$e->getMessage()."</h3>";
	}

	?>
</body>
</html>