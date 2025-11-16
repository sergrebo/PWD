<?php

// Implementar en la capa de la vista un script Vista/login.php que invoque al script accion/verificarLogin.php el cual redirecciona al script Vista/paginaSegura.php si los datos ingresados se corresponden con un usuario/pass registrados. Caso contrario se redirecciona nuevamente al script Vista/login.php
print_r($_SESSION);
print_r($_COOKIE);
include_once '../../estructura/cabecera-retorno.php'; ?>

<main class="container mt-5">
  <form action="accion/validarLogin.php" method="post">
    <div class="mb-3">
      <label for="" class="form label">Nombre de usuario</label>
      <input type="text" name="usnombre" id="" class="form-control">
    </div>
    <div class="mb-3">
      <label for="" class="form label">Contraseña</label>
      <input type="password" name="uspass" id="" class="form-control">
    </div>
    <input type="submit" value="Iniciar sesión" class="btn btn-primary">
  </form>
</main>

<?php include_once '../../estructura/pie.php'; ?>