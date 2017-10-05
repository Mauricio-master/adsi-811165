<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Comparación</title>
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
	<h1>Operadores Comparación</h1>
	<hr>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripción</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
		</tr>
		<tr>

			<td>==</td>
			<td>Es Igual</td>
			<td>5 == 8</td>
			<td><?=var_dump(5 == 8)?></td>
		</tr>
		<tr>

			<td>!=</td>
			<td>No es Igual</td>
			<td>5 != 8</td>
			<td><?=var_dump(5 != 8)?></td>
		</tr>
		<tr>

			<td><></td>
			<td>No es Igual</td>
			<td>5 <> 8</td>
			<td><?=var_dump(5 <> 8)?></td>
		</tr>
		<tr>

			<td>></td>
			<td>Es Mayor que</td>
			<td>5 > 8</td>
			<td><?=var_dump(5 > 8)?></td>
		</tr>
		<tr>

			<td><</td>
			<td>Es Menor que</td>
			<td>5 < 8</td>
			<td><?=var_dump(5 < 8)?></td>
		</tr>
		<tr>

			<td>></td>
			<td>Es Mayor o Igual que</td>
			<td>5 >= 8</td>
			<td><?=var_dump(5 >= 8)?></td>
		</tr>
		<tr>

			<td><</td>
			<td>Es Menor o Igual que</td>
			<td>5 <= 8</td>
			<td><?=var_dump(5 <= 8)?></td>
		</tr>
		
	</table>
</body>
</html>