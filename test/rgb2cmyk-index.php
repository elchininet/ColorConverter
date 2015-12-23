<!DOCTYPE html">
<html>
	<head>
		
		<title>PHP Color Model Convertion RGB To CMYK</title>
		<meta charset="UTF-8" />
		<link type="text/css" rel="stylesheet" href="styles/rgb2cmyk.css">

	</head>

	<body>

		<div class="container">
    
			<?php

				include('classes/ColorConverter.php');

				$converter = new ColorConverter();

				//---Array de colores
				$colors = array('#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#FF00FF');

				$reg = '/^([\d\.]+)%$/';

				//---Crear los elementos
				echo "<div class='colors'>";

					for($i = 0; $i < 5; $i++){

						$tint = $colors[$i];
						$hsl = $converter->toHSL($tint);
						$step = preg_replace($reg, '$1', $hsl['s']) / 4;

						for($j = 0; $j < 5; $j++){

							$rgb = $converter->toHEX($hsl, true);
							$cmyk = $converter->toCMYK($hsl);
							
							echo "<div class='box' style='background: {$rgb}'>";

								foreach($cmyk as $index => $value){

									echo $index . ":" . $value;
									echo "<br>";

								}

							echo "</div>";

							$hsl['s'] = (preg_replace($reg, '$1', $hsl['s']) - $step) . "%";

						}

					}

				echo "</div>";
			
			?>

		<div>

	</body>
</html>