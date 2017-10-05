<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mktime</title>
</head>
<body>
	<form action="" method="post">
		<fieldset>
			<legend><h1>Calcular Años Vividos</h1></legend>
			<input type="text" name="dia" placeholder="Dia">
			<input type="text" name="mes" placeholder="Mes">
			<input type="text" name="ano" placeholder="Año">
			<br>
			<input type="submit" value="Calcular">
		</fieldset>
	</form>
	<hr>
	<?php 

	if ($_POST) {
		$dia = $_POST['dia'];
		$mes = $_POST['mes'];
		$ano = $_POST['ano'];

		$factual = mktime(0,0,0,date('m'),date('d'),date('Y'));
		$fnacimi = mktime(0,0,0,$mes,$dia,$ano);

		$ftotal  = $factual - $fnacimi;
		$ftotal  = ( ( ( ( $ftotal / 60 ) / 60 ) / 24 ) / 365 );

		echo "<h3> El número de años: ".floor($ftotal)."</h3>";

	}

	?>
</body>
</html>