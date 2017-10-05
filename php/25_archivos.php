 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Manejo de Archivos con PHP</title>
 </head>
 <body>
 	<h1>Manejo de Archivos con PHP</h1>
 	<hr>

 	<?php 

 	// fopen - abrir el archivo
 	$archivo = fopen('lorem.txt', 'r') or exit('No se encontro el archivo!');

 	//feof - si el archivo finalizo
 	while (!feof($archivo)) {
 		//fgets - obtiene linea a linea
 		echo fgets($archivo)."<br>";
 	}

 	// fclose - cerrar archivo
 	fclose($archivo);

 	echo "<br><hr><br>";

 	$archivo2 = fopen('lorem.txt', 'r') or exit('No se encontro el archivo!');

 	while (!feof($archivo2)) {
 		//fgetc - obtiene caracter a caracter
 		echo fgetc($archivo2)."-";
 	}
 	fclose($archivo2);

 	?>
 </body>
 </html>