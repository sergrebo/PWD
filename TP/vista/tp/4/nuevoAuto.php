<?php
/**
 * Ejercicio 5 – Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar todos los datos de un auto (incluso   su   dueño). Estos datos serán enviados a una página “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
 */

include_once '../../../configuracion.php';

if (!empty($_GET)) {
  $datos = darDatosSubmitted();
  //print_r($datos);
  $dni = $datos['nroDni'];
}


include_once '../../estructura/cabecera-retorno.php' ?>

<main class="container">
  <h4 class="text-center mt-4">FORMULARIO DE ALTA - AUTO</h4>
  <form action="./accionNuevoAuto.php" method="get" id="formulario" class="novalidate col-6 mx-auto" novalidate>
    <div class="row">
      <div class="col mb-3 position-relative">
        <label for="dniDuenio" class="form-label">DNI del titular del vehículo</label>
        <div class="input-group">
          <input type="text" name="dniDuenio" id="dniDuenio" class="form-control" value="<?php echo $dni ?>" readonly>
          <a href="./elegirPersona.php" class="input-group-text"><i class="bi bi-search"></i></a>
        </div>
      </div>
      <div class="col mb-3 position-relative">
        <label for="patente" class="form-label">Patente del vehículo</label>
        <input type="text" name="patente" id="patente" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="col mb-3 position-relative">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" name="marca" id="marca" class="form-control">
      </div>
      <div class="col mb-3 position-relative">
        <label for="modelo" class="form-label">Modelo</label>
        <input type="text" name="modelo" id="modelo" class="form-control">
      </div>
    </div>
    <input type="submit" value="Enviar">
    <div class="row">
    </div>
  </form>
</main>
<script src="../../js/validacionmk2.js"></script>

<?php include_once '../../estructura/pie.php' ?>