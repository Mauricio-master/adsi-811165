<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enviar Correo Electrónico</title>
</head>
<body>
	<h1>Enviar Correo Electrónico</h1>
	<hr>

	<form method="post" action="">
		<strong>Correo:</strong>
		<input type="text" name="email"><br>
		<strong>Asunto:</strong>
		<input type="text" name="asunto"><br>
		<strong>Mensaje:</strong>
		<textarea name="mensaje"></textarea><br>
		<input type="submit" value="Enviar">
	</form>

<?php 
	if($_POST) {
		$email   = $_POST["email"];
		$asunto  = $_POST["asunto"];
		$mensaje = $_POST["mensaje"];

		mail("ofac@misena.edu.co", "Asunto: $asunto", $mensaje, "De: $email");
		echo "Gracias, El Correo fue enviado.";
	}
?>

</body>
</html>