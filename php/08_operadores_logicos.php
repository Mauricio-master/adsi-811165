<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Lógicos</title>
	<style>
		body {
			font-family: Arial;
		}
		table {
			border-collapse: collapse;
		}
		table td, table th {
			background-color: #ddd;
			border: 1px solid #ccc;
			color: #666;
			padding: 10px;
		}
		table th {
			background-color: #999;
			color: #fff;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Operadores Lógicos</h1>
	<hr>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripción</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<?php
			 $x = 6;
			 $y = 3;
			?>		
			<td>&&</td>
			<td>Y (and)</td>
			<td>x = 6; y = 3; ( x < 10 && y > 1 )</td>
			<td><?=var_dump($x < 10 && $y > 1)?></td>
		</tr>
		<tr>
			<td>||</td>
			<td>O (or)</td>
			<td>x = 6; y = 3; ( x == 5 || y == 5 )</td>
			<td><?=var_dump($x == 5 || $y == 5)?></td>
		</tr>
		<tr>
			<td>!</td>
			<td>No (not)</td>
			<td>x = 6; y = 3; !( x == y )</td>
			<td><?=var_dump(!( $x == $y ))?></td>
		</tr>
		
		
	</table>
</body>
</html>