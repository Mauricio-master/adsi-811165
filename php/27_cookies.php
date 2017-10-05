<?php  
	if($_POST) {
		setcookie('nombre', $_POST['nombre'], time()+120);
		setcookie('busqueda', $_POST['busqueda'], time()+120);

		// Eliminar Cookie
		//setcookie('nombre', time()-120);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
</head>
<body>
	<h1>Cookies</h1>
	<hr>
	<?php 

	if (isset($_COOKIE['nombre'])) {
		echo "<h3> Bienvenido: ".$_COOKIE['nombre']."</h3>";
	}

	?>
	<form action="" method="post">
		<input type="text" name="nombre" placeholder="Nombre">
		<br>
		<input type="search" name="busqueda" placeholder="Buscar">
		<br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>