<?php 
/**
 * Ejercicio 6 – Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados a una página “accionCambioDuenio.php” en donde se realice cambio del   dueño del auto de la patente ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
 */

include_once '../../estructura/cabecera-retorno.php' ?>

<main class="container">
  <div class="col">
    <form action="./accionCambioDuenio.php" method="get" id="formulario" class="needs-validation" novalidate>
      <div class="row">
        <div class="col position-relative mb-3">
          <label for="patente" class="form-label">Ingrese la patente del vehículo a transferir</label>
          <input type="text" name="patente" id="patente" class="form-control">
        </div>
        <div class="col position-relative mb-3">
          <label for="nroDni" class="form-label">Ingrese el documento de identidad del nuevo dueño</label>
          <input type="text" name="nroDni" id="nroDni" class="form-control">
        </div>
      </div>
      <input type="submit" value="Enviar">
    </form>
  </div>

</main>

<?php include_once '../../estructura/pie.php';