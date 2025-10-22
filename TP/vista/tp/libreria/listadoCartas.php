<?php
include_once '../../../configuracion.php';
include_once '../../estructura/cabecera-retorno.php';

$control = new TarotControlador();
$resultado = $control->obtenerCartas();
?>

<div class="container mt-4">
  <h2>Listado de Cartas del Tarot</h2>
  <hr>

  <?php if ($resultado['success']): ?>
    <p><strong>Total de cartas:</strong> <?= $resultado['count'] ?></p>
    <div class="row">
      <?php foreach ($resultado['data'] as $carta): ?>
        <div class="col-md-3 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($carta['name']) ?></h5>
              <p class="card-text">
                <small><?= htmlspecialchars($carta['desc']) ?></small>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <div class="alert alert-danger">
      <strong>Error:</strong> <?= htmlspecialchars($resultado['error']) ?><br>
      <small><?= htmlspecialchars($resultado['message']) ?></small>
    </div>
  <?php endif; ?>
</div>

<?php
include_once '../../estructura/pie.php';
?>
