<form action="<?php if ($_GET['accion'] == 'actualizar') {echo './accionActualizarLogin.php';} ?>" method="post">
  <div class="mb-3">
    <label for="" class="input-label">ID</label>
    <input type="text" name="id" value="<?php echo $usuario['id'] ?>" readonly class="form-control"></input>
  </div>
  <div class="mb-3">
    <label for="" class="input-label">Nombre de usuario</label>
    <input type="text" name="usnombre" <?php if ($_GET['accion'] == 'borrar') {echo 'readonly ';} echo 'value=' . $usuario['usnombre'] ?> class="form-control"></input>
  </div>
  <div class="mb-3">
    <label for="" class="input-label">Contraseña</label>
    <input type="password" name="uspass" <?php if ($_GET['accion'] == 'borrar') {echo 'readonly ';} echo 'value=' . $usuario['uspass'] ?> class="form-control"></input>
  </div>
  <div class="mb-3">
    <label for="" class="input-label">Correo electrónico</label>
    <input type="text" name="usmail" <?php if ($_GET['accion'] == 'borrar') {echo 'readonly ';} echo 'value=' . $usuario['usmail'] ?> class="form-control"></input>
  </div>
  <div class="mb-3">
    <div class="form-check form-check-inline">
      <input type="radio" name="estado" value="habilitado" <?php if (is_null($usuario['usdeshabilitado'])) {echo 'checked ';} if ($_GET['accion'] == 'actualizar') {echo 'disabled';}?> class="form-check-input"></input>
      <label for="" class="form-check-label">Usuario habilitado</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" name="estado" value="deshabilitado" <?php if (!is_null($usuario['usdeshabilitado'])) {echo 'checked ';} if ($_GET['accion'] == 'actualizar') {echo 'disabled';}?> class="form-check-input"></input>
      <label for="" class="form-check-label">Usuario deshabilitado</label>
    </div>
  </div>
  <div class="mb-3">
    <input type="submit" class="btn btn-primary" value="Enviar"></input>
  </div>
</form>