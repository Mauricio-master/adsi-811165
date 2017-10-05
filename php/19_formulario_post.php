<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios (POST)</title>
</head>
<body>
	<h1>Formularios (POST)</h1>
	<hr>

	<form action="" method="post">
		<fieldset>
			<legend><h2>Datos Personales</h2></legend>
			<div>
				<input 
				type="text" 
				name="nombre" 
				placeholder="Nombre Completo"
				value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']; ?>">
			</div>
			<div>
				<input 
				type="email" 
				name="email" 
				placeholder="Correo Electrónico"
				value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
			</div>
			<div>
				<input 
				type="number" 
				name="telefono" 
				placeholder="Número Telefónico"
				value="<?php if(isset($_POST['telefono'])) echo $_POST['telefono']; ?>">
			</div>
			<div>
				<input type="submit" value="Enviar">
			</div>
		</fieldset>
		</form>
		<hr>
		<ul>
		<?php 

			if($_POST):
				$errores = 0;
				foreach ($_POST as $key => $value) {
					if(!$value)
						$errores++;
				}
				if($errores == 0)
				{
					//var_dump($_POST);
					$nombre    = $_POST['nombre'];
					$email     = $_POST['email'];
					$telefono  = $_POST['telefono'];
					echo "<li> Nombre: ".$nombre."</li>";
					echo "<li> Email: ".$email."</li>";
					echo "<li> Teléfono: ".$telefono."</li>";
				} else {
					echo "<li>Debe llenar todos los campos!</li>";
				}
			endif;

		?>
		</ul>
	
</body>
</html>