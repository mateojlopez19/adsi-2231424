<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Arreglos (Multidimensionales)</title>
</head>
<body>
	<main class="container">
		<section>
			<div>
				<h1>Arreglos (Multidimensionales)</h1>
				<hr>
				<?php 
					$bicycles = array(
						'Santa Cruz'  => array('Nomad', 'MegaTower', 'HighTomer'),
						'Intense'     => array('Carbine', 'Tracer', 'Spider'),
						'Specialized' => array('Enduro', 'Stumjumper', 'Camber')
					);
					//var_dump($bicycles);
				?>
				<table>
					<?php foreach ($bicycles as $brand => $value): ?>
						<tr>
							<th class="bg-dark text-light"><?php echo $brand ?></th>
							<?php foreach ($value as $reference): ?>
								<td><?php echo $reference; ?></td>
							<?php endforeach ?>
						</tr>
					<?php endforeach ?>
				</table>
			</div>
		</section>
	</main>

</body>
</html>