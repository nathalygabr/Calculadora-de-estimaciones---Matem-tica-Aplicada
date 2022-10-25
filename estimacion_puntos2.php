<?php
$sumatotal = $_POST["calculo_punto_1"];
$cantidadtotal = $_POST["calculo_punto_2"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultado - Estimacion por puntos - Calculadora</title>
</head>
<body>
	<h2 align="center">ESTIMACION POR PUNTOS</h2>
	<h3 align="center">El resultado es el siguiente:</h3>
	<?php
	$mediapuntual = $sumatotal/$cantidadtotal;
	echo "<h3 align='center'>La media obtenida con los datos ingresados es de $mediapuntual </h3><br>";
	echo "<h3 align='center'>Procedemos con el calculo de la varianza usando la siguiente formula:</h3><br>";
	?>
	<div class="figure" align="center">
		<img src="img/formula_puntual_varianza.png" width="400">
	</div>
	<?php
	$parte1 = $sumatotal * $mediapuntual;
	$parte2 = pow($parte1, 2);#$parte1 ** 2;
	$varianzar = $parte2 / $cantidadtotal;
	echo "<h3 align='center'>Intercambiando valores de la formula, la varianza es de $varianzar</h3><br>";
	echo "<h3 align='center'>Ahora, teniendo el valor de la varianza, se aplica la formula de desviacion estandar</h3><br>";
	?>
	<div class="figure" align="center">
		<img src="img/formula_puntual_desviacion_estandar.png" width="500">
	<?php
	$desviacionestandar = pow($varianzar, 1/2);
	echo "<h3 align='center'>La desviacion estandar es $desviacionestandar</h3><br>";
	?>
	<p align="center"><a href="estimacion_puntos.php">Volver a calcular</p>
</body>
</html>