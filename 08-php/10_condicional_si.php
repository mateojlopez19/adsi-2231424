<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Condional (if-else-elseif)</title>
</head>
<body>
	<main class="container">
		<section>
			<div>
				<h1 class="text-dark">Condional (if-else-elseif)</h1>
				<hr>
				<?php $day = date('L'); ?>
				<?php if ($day == "Mon"): ?>
					<span>Hoy es Lunes</span>
				<?php elseif ($day == "Tue"): ?>
					<span>Hoy es Martes</span>
				<?php elseif ($day == "Wed"): ?>
					<span>Hoy es Miércoles</span>
				<?php elseif ($day == "Thu"): ?>
					<span>Hoy es Jueves</span>
				<?php elseif ($day == "Fri"): ?>
					<span>Hoy es Viernes</span>
				<?php else: ?>
					<span>Feliz fin de Semana</span>
				<?php endif ?>
			</div>
		</section>
	</main>
</body>
</html>