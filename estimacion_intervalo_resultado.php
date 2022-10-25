<?php
$muestra_r = $_POST ["calculo_1"];
$media_r = $_POST ["calculo_2"];
$desviacion_r = $_POST ["calculo_3"];
$nivelcon_r = $_POST ["calculo_4"];
$confianzaoriginal = $_POST ["grado_confianza2"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultado - Estimación por intervalos - Calculadora</title>
</head>
<body>
	<h3 align="center">Su resultado es el siguiente:</h3>
	<?php
#	$sacaraiz = $muestra_r * (1/2);
	$sacaraiz = pow($muestra_r, 1/2);
	$parte2 = $desviacion_r / $sacaraiz;
	$parte3 = $nivelcon_r * $parte2;
	$sumaresta1 = $media_r - $parte3;
	$sumaresta2 = $media_r + $parte3;
	echo "<h3 align='center'> Los intervalos resultantes son: $sumaresta1 y $sumaresta2 </h3><br>";
	if ($confianzaoriginal == "90") {
		?>
		<div class="figure" align="center">
			<img src="img/figura_estimacion_intervalos_90.png">
			<p><?php echo "<strong>$sumaresta1</strong> //////////////////////////////////////////////////////////////////////////////////////////////////// <strong>$sumaresta2</strong>" ?></p>
		</div> 
		<?php
	}else if ($confianzaoriginal == "95") {
		?>
		<div class="figure" align="center">
			<img src="img/figura_estimacion_intervalos_95.png">
			<p><?php echo "<strong>$sumaresta1</strong> //////////////////////////////////////////////////////////////////////////////////////////////////// <strong>$sumaresta2</strong>" ?></p>
		</div>
		<?php
	}else {
		?>
		<div class="figure" align="center">
			<img src="img/figura_estimacion_intervalos_99.png">
			<p><?php echo "<strong>$sumaresta1</strong> //////////////////////////////////////////////////////////////////////////////////////////////////// <strong>$sumaresta2</strong>" ?></p>
		</div>
		<?php
	}
	?>
	<p align="center"><a href="estimacion_intervalos.php">Volver a calcular</a></p>
</body>
</html>