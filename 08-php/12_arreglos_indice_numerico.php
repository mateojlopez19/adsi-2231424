<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Arreglos (Índice Numérico)</title>
</head>
<body>
			<div >
				<h1>Arreglos (Índice Numérico)</h1>
				<hr>
				<?php 
					# Asignación de Índice
					$cars = array('Volkswagen', 'Toyota', 'Renault');
					# Asignación de Índice manual
					$cars[3] = 'Fiat';
					$cars[4] = 'Mazda';
					$cars[5] = 'Chevrolet';

					//var_dump($cars);
				?>
				<div>
				<?php foreach ($cars as $car): ?>
					<button type="button">
						<?php echo $car ?>
					</button>
				<?php endforeach ?>
				</div>
				
			</div>
</body>
</html>