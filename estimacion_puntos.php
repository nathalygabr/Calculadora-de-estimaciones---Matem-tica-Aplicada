<!DOCTYPE html>
<html>
<head>
	<title>Estimacion por puntos - Calculadora</title>
</head>
<body>
	<h2 align="center">ESTIMACION POR PUNTOS</h2>
	<h3 align="center">Primero, se procede a calcular la media</h3>
	<br>
	<form action="estimacion_puntos2.php" method="POST">
		<table align="center" border="1px">
			<tr>
				<th scope="col">Suma total de los datos</th>
				<th scope="col">Numero de datos</th>
			</tr>
			<tr>
				<td><input type="tel" name="calculo_punto_1"></td>
				<td><input type="tel" name="calculo_punto_2"></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" value="Calcular"></td>
				<td align="center"><input type="reset" value="Borrar datos"></td>
			</tr>
		</table>
	</form>
	<br><br><br>
	<div class="figure" align="center">
		<img src="img/media_formula.png" width="600">
		<p>FORMULA DE MEDIA</p>
	</div>
	<br><br><br>
	<p align="center"><a href="INDEX.php">Pagina principal</a></p>
</body>
</html>