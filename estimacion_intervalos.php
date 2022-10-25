<!DOCTYPE html>
<html>
<head>
	<title>Estimación por intervalos - Calculadora</title>
</head>
<body>
	<h2 align="center">ESTIMACION POR INTERVALOS</h2>
	<h3 align="center">Primero, ingrese el nivel de confianza a calcular</h3>
	<br>
	<form action="estimacion_intervalos2.php" method="POST">
		<table align="center" border="1px">
			<tr>
				<th><strong>Nivel de confianza (%)</strong></th>
			</tr>
			<tr>
				<td align="center"><select name="grado_confianza">
					<option>90</option>
					<option>95</option>
					<option>99</option>
				</select></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" value="Calcular"></td>
			</tr>
		</table>
	</form>
	<br><br><br>
	<p align="center"><a href="INDEX.php">Pagina principal</a></p>
</body>
</html>