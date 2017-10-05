<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
	<h1>Sesiones</h1>
	<hr>

	<?php 

	if($_POST) {
		unset($_SESSION['visitas']);
		session_destroy();
	}

	if(isset($_SESSION['visitas'])) {
		$_SESSION['visitas']++;
	} else {
		$_SESSION['visitas'] = 1;
	}

	echo "Número de visitas: ".$_SESSION['visitas'];
	?>

	<form action="" method="post">
		<input type="submit" name="btn" value="Cerrar Sesión">
	</form>

</body>
</html>