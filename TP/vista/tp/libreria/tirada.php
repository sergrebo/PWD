<?php
include_once '../../../configuracion.php';
include_once '../../estructura/cabecera-retorno.php';
?>

<div class="container mt-4 text-center">
  <h1 class="mb-4">Tirada de Carta del Tarot</h1>
  <form action="accionTirada.php" method="post" class="mx-auto" style="max-width: 400px;">
    <div class="mb-3">
      <label for="tema" class="form-label">Elige un tema:</label>
      <select name="tema" id="tema" class="form-select" required>
        <option value="">-- Selecciona un tema --</option>
        <option value="amor">Amor</option>
        <option value="trabajo">Trabajo</option>
        <option value="dinero">Dinero</option>
        <option value="espiritualidad">Espiritualidad</option>
        <option value="salud">Salud</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Tirar carta</button>
  </form>
</div>

<?php
include_once '../../estructura/pie.php';
?>
