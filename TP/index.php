<?php
	include_once './vista/estructura/cabecera.php'; 
?>

<main class="container mt-5 text-center">
	<h1 class="display-5 fw-bold text-body-emphasis">Programación Web Dinámica</h1>
	<p class="lead mt-4">En esta sección, encontrarás los trabajos prácticos (TP) realizados a lo largo del curso de Programación Web Dinámica. Cada TP incluye ejemplos prácticos y ejercicios que abordan temas clave, como la validación de formularios, la manipulación de archivos en PHP, el uso de jQuery, y más. Explora cada uno para comprender mejor los conceptos y técnicas enseñados.</p>

	<article class="card mt-5 w-50 mx-auto bg-secondary-subtle">
		<section class="card-body mb-3">
			<div class="row">
				<div class="col mb-3">
					<a href="#divColapsable" class="align-middle text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="divColapsable">
						<h5 class="card-title">Trabajo Practico n° 4</h5>
						<h6 class="card-subtitle text-body-secondary mb-2">php / MySql / PDO</h6>
					</a>
				</div>
			</div>
			<div class="row collapse bg-transparent" id="divColapsable">
				<div class="list-group text-start w-75 mx-auto">
					<a href="./vista/tp/4/verAutos.php" class="list-group-item list-group-item-action list-group-item-dark">verAutos.php</a>
					<a href="./vista/tp/4/buscarAuto.php" class="list-group-item list-group-item-action list-group-item-dark">buscarAuto.php</a>
					<a href="./vista/tp/4/listaPersonas.php" class="list-group-item list-group-item-action list-group-item-dark">listaPersonas.php</a>
					<a href="./vista/tp/4/nuevaPersona.php" class="list-group-item list-group-item-action list-group-item-dark">nuevaPersona.php</a>
					<a href="./vista/tp/4/nuevoAuto.php" class="list-group-item list-group-item-action list-group-item-dark">nuevoAuto.php</a>
					<a href="./vista/tp/4/cambioDuenio.php" class="list-group-item list-group-item-action list-group-item-dark">cambioDuenio.php</a>
					<a href="./vista/tp/4/buscarPersona.php" class="list-group-item list-group-item-action list-group-item-dark">buscarPersona.php</a>
				</div>
			</div>
		</section>
	</article>

	<article>
		<div class="row">
			<a href="./vista/tp/libreria/tarot-cartas.php">API Tarot con Guzzle - Probar conexión</a>
		</div>
		<div class="row">
			<a href="./vista/tp/libreria/listadoCartas.php">TP Librería - Tarot con Guzzle</a>
		</div>
	</article>

</main>

<?php
	include_once './vista/estructura/pie.php'; 
?>