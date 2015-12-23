<!DOCTYPE html">
<html>
	<head>
		
		<title>PHP Color Model Convertion HSL To RGB</title>
		<meta charset="UTF-8" />
		<link type="text/css" rel="stylesheet" href="styles/hsl2rgb.css">

	</head>

	<body>

		<div class="container">
    
			<?php

				include('classes/ColorConverter.php');

				$converter = new ColorConverter();

				echo "<div class='colors'>";

					for($i = 0; $i < 10; $i++){

						for($j = 0; $j < 10; $j++){

							$hsl = array(
								'h' => 25,
								's' => ($i * 10) . '%',
								'l' => ($j * 5 + 30) + '%'
							);

							$rgb = $converter->toHEX($hsl, true);
							$codes = $converter->toRGB($hsl);

							echo "<div class='box' style='background: {$rgb}'>";

								foreach($codes as $index => $value){

									echo $index . ":" . $value;
									echo "<br>";

								}

							echo "</div>";

						}

					}

				echo "</div>";
			
			?>

		<div>

	</body>
</html>