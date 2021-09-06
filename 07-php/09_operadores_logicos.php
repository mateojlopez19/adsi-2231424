<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Operadores Lógicos</title>
</head>
<body>

				<table class="table table-bordered table-striped table-hover table-dark">
					<thead class="bg-secondary text-uppercase">
						<tr>
							<th>Operador</th>
							<th>Descripción</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> && </td>
							<td> Y </td>
							<td>$x=6; $y=3; ($x<10 && $y>1)</td>
							<td>
								<?php 
									$x=6; 
									$y=3;
									echo var_asignar($x<10 && $y>1); 
								?>
							</td>
						</tr>
						<tr>
							<td> || </td>
							<td> O </td>
							<td>$x=6; $y=3; ($x==5 || $y==5)</td>
							<td>
								<?php 
									$x=6; 
									$y=3;
									echo var_asignar($x==5 || $y==5); 
								?>
							</td>
						</tr>
						<tr>
							<td> ! </td>
							<td> No </td>
							<td>$x=6; $y=3; !($x==$y)</td>
							<td>
								<?php 
									$x=6; 
									$y=3;
									echo var_asignar(!($x==$y)); 
								?>
							</td>
						</tr>
					</tbody>
				</table>
</body>
</html>