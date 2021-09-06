<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Arreglos (Asociativos)</title>
</head>
<body>
	<main>
		<section">
			<div>
				<h1 class="text-dark">Arreglos (Asociativos)</h1>
				<hr>
				<?php 
					$studends = array('maria'    => 16, 
						              'ximena'     => 15, 
						              'natalia'  => 17,
						              'stefa' => 18);
					$studends['carla'] = 20;
					$studends['jeni']     = 19;

					//var_dump($studends);
				?>
				<div class="btn-group-vertical">
				<?php foreach ($studends as $key => $value): ?>
					<button type="button">
						<?php echo $key ?>
						<span"><?php echo $value ?></span>
					</button>
				<?php endforeach ?>
				</div>
				<?php
			</div>
		</section>
	</main>
</body>
</html>