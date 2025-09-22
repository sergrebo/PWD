<?php

if (isset($_GET['origen'])) {
  switch ($_GET['origen']) {
    case 'buscarPersona':
      $action = './actualizarDatosPersona.php';
      break;
    
    case 'nuevoAuto':
      $action = './accionNuevaPersona.php?origen=elegirPersona';
      break;
  }
} else {
  $action = './accionNuevaPersona.php?origen=nuevaPersona';
}
?>

<form action=<?php echo $action ?> method="post" id="formulario" class="needs-validation" novalidate>
  <div class="row">
    <div class="col form-group mb-3 position-relative">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" name="nombre" id="nombre" class="form-control"
        <?php if (isset($_GET['origen']) && $_GET['origen'] == 'buscarPersona') {
          echo 'value="' . $arreglo['nombre'] . '"';
        } ?>
      >
    </div>
    <div class="col form-group mb-3 position-relative">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text" name="apellido" id="apellido" class="form-control"
        <?php if (isset($_GET['origen']) && $_GET['origen'] == 'buscarPersona') {
          echo 'value="' . $arreglo['apellido'] . '"';
        } ?>
      >
    </div>
  </div>
  <div class="row">
    <div class="col form-group mb-3 position-relative">
      <label for="nroDni" class="form-label">N° de documento de identidad</label>
      <input type="text" name="nroDni" id="nroDni" class="form-control" 
        <?php if (isset($_GET['origen']) && $_GET['origen'] == 'buscarPersona') {
          echo 'value="' . $arreglo["nroDni"] . '" readonly';
        } ?>
      >
    </div>
    <div class="col form-group mb-3 position-relative">
      <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
      <input type="date" name="fechaNac" id="fechaNac" class="form-control"
        <?php if (isset($_GET['origen']) && $_GET['origen'] == 'buscarPersona') {
          echo 'value="' . $arreglo['fechaNac'] . '"';
        } ?>
      >
    </div>
  </div>
  <div class="row">
    <div class="col form-group mb-3 position-relative">
      <label for="domicilio" class="form-label">Domicilio</label>
      <input type="text" name="domicilio" id="domicilio" class="form-control"
        <?php if (isset($_GET['origen']) && $_GET['origen'] == 'buscarPersona') {
          echo 'value="' . $arreglo['domicilio'] . '"';
        } ?>
      >
    </div>
    <div class="col form-group mb-3 position-relative">
      <label for="telefono" class="form-label">Teléfono</label>
      <input type="text" name="telefono" id="telefono" class="form-control"
        <?php if (isset($_GET['origen']) && $_GET['origen'] == 'buscarPersona') {
          echo 'value="' . $arreglo['telefono'] . '"';
        } ?>
      >
    </div>
  </div>
  <div class="mb-5">
    <input type="submit" value="Enviar">
  </div>
</form>
