<?php
include_once '../../../configuracion.php';

// Incluye la cabecera común
include_once '../../estructura/cabecera-retorno.php';

// Obtener el tema enviado desde el formulario
$tema = $_POST['tema'] ?? null;

if (!$tema) {
    echo "<div class='alert alert-warning text-center'>No se seleccionó ningún tema.</div>";
    include_once '../../estructura/pie.php';
    exit;
}

$control = new TarotControlador();
$resultado = $control->obtenerCartaParaTema($tema);

if (!$resultado['success']) {
    echo "<div class='alert alert-danger text-center'>Error: {$resultado['error']}</div>";
    include_once '../../estructura/pie.php';
    exit;
}

$carta = $resultado['carta'];
$orientacion = $resultado['orientacion'];
$significadoOrientacion = $resultado['significadoOrientacion'];
$significadoTema = $resultado['significadoTema'];
$claseOrientacion = ($orientacion === 'al reves') ? 'reves' : 'derecho';
?>

<div class="container mt-4">
  <div class="card shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-body text-center">
      <h2 class="mb-3">Tu carta del Tarot para el tema: <strong><?= ucfirst($tema) ?></strong></h2>
      <h4><?= htmlspecialchars($carta['name']) ?> (<?= $orientacion ?>)</h4>
      <img src="<?= htmlspecialchars($carta['image']) ?>" alt="Carta del tarot" class="img-fluid rounded shadow-lg my-3 carta-tarot <?= $claseOrientacion ?>" style="max-height: 450px;">
      <p class="lead"><?= htmlspecialchars($significadoOrientacion) ?></p>
      <p class="lead"><?= htmlspecialchars($significadoTema) ?></p>
      <p class="text-muted small mt-3"><?= htmlspecialchars($carta['desc']) ?></p>
      <a href="tirada.php" class="btn btn-outline-primary mt-3">Volver a tirar</a>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const carta = document.querySelector(".carta-tarot");
    // Espera un breve instante antes de mostrarla (simula la “revelación”)
    setTimeout(() => {
      carta.classList.add("mostrar-carta");
    }, 300);
  });
</script>

<?php
// Incluye el pie común
include_once '../../estructura/pie.php';
?>