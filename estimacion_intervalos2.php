<?php
#esta es la segunda pantalla, donde se hace el calculo de la formula general con los resultados del grado de confianza
$recibodenivelconfianza = $_POST["grado_confianza"];
#hago el calculo

?>

<!DOCTYPE html>
<html>
<head>
	<title>Estimacion por intervalos - Calculadora</title>
</head>
<body>
	<h2 align="center">ESTIMACION POR INTERVALOS</h2>
	<?php
	switch ($recibodenivelconfianza) {
	case $recibodenivelconfianza=="90":
		$parte1 = 1 - 0.90;
		$parte2 = $parte1 / 2;
		echo "<h3 align='center'>El valor para Z es $parte2. <br>Con la siguiente tabla, ubicas el valor que se aproxime al resultado</h3>";
		break;
	case $recibodenivelconfianza=="95":
		$parte1 = 1 - 0.95;
		$parte2 = $parte1 / 2;
		echo "<h3 align='center'>El valor para Z es $parte2. <br>Con la siguiente tabla, ubicas el valor que se aproxime al resultado</h3>";
		break;
	case $recibodenivelconfianza == "99":
		$parte1 = 1 - 0.99;
		$parte2 = $parte1 / 2;
		echo "<h3 align='center'>El valor para Z es $parte2. <br>Con la siguiente tabla, ubicas el valor que se aproxime al resultado</h3>";
		break;
	default:
		echo "Esta accion no esta permitida";
		break;
	}
	?>
	<div class="figure" align="center">
		<img src="img/tabla_distribucion_normal.png">
	</div>
	<h3 align="center">Luego, ingrese en los cuadros los datos que quiera calcular</h3>
	<br>
	<form action="estimacion_intervalo_resultado.php" method="POST">
		<table align="center" border="1px">
			<tr>
				<th scope="col"><strong>Muestra (n)</strong></th>
				<th scope="col"><strong>Varianza o Media</strong></th>
				<th scope="col"><strong>Desviacion Estandar (S)</strong></th>
				<th scope="col"><strong>Nivel de confianza (Z)</strong></th>
				<th scope="col"><strong>Nivel de confianza (%)</strong></th>
			</tr>
			<tr>
				<td scope="col"><input type="tel" name="calculo_1" required></td>
				<td><input type="tel" name="calculo_2" required></td>
				<td><input type="tel" name="calculo_3" required></td>
				<td><input type="tel" name="calculo_4"></td>
				<td><select name="grado_confianza2">
					<option>90</option>
					<option>95</option>
					<option>99</option>
				</select>
			</tr>
			<tr>
				<td align="center"><input type="submit" value="Calcular"></td>
				<td align="center"><input type="reset" value="Borrar datos"></td>
			</tr>
		</table>
	</form>
	<br><br><br>
	<div class="figure" align="center">
		<img src="img/formula_estimacion_intervalos.png" width="400">
		<p>FORMULA DE ESTIMACION POR INTERVALOS</p>
	</div>
</body>
</html>