<?php 
/**
 * Ejercicio 4 – Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
 */

include_once '../../estructura/cabecera-retorno.php' ?>

<main class="container mt-4">
  <h4 class="text-center mb-3">FORMULARIO DE ALTA - PERSONA</h4>
  <form action="./accionNuevaPersona.php?origen=nuevaPersona" method="post" id="formulario" class="needs-validation col-6 mx-auto" novalidate>
    <div class="row">
      <div class="col form-group mb-3 position-relative">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
      </div>
      <div class="col form-group mb-3 position-relative">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="col form-group mb-3 position-relative">
        <label for="nroDni" class="form-label">N° de documento de identidad</label>
        <input type="text" name="nroDni" id="nroDni" class="form-control">
      </div>
      <div class="col form-group mb-3 position-relative">
        <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
        <input type="date" name="fechaNac" id="fechaNac" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="col form-group mb-3 position-relative">
        <label for="domicilio" class="form-label">Domicilio</label>
        <input type="text" name="domicilio" id="domicilio" class="form-control">
      </div>
      <div class="col form-group mb-3 position-relative">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" name="telefono" id="telefono" class="form-control">
      </div>
    </div>
    <div class="">
      <input type="submit" value="Enviar">
    </div>
  </form>
</main>
<script src="../../js/validacionmk2.js"></script>
<?php include_once '../../estructura/pie.php' ?>
