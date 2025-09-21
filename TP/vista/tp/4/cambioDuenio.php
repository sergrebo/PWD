<?php 
/**
 * Ejercicio 6 – Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados a una página “accionCambioDuenio.php” en donde se realice cambio del   dueño del auto de la patente ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
 */
session_start();

if (isset($_GET['patente'])) {
  $_SESSION['patente'] = $_GET['patente'];
}
if (isset($_GET['nroDni'])) {
  $_SESSION['nroDni'] = $_GET['nroDni'];
}

include_once '../../estructura/cabecera-retorno.php' ?>

<main class="container">
  <div class="col mt-4">
    <form action="./accionCambioDuenio.php" method="post" id="formulario" class="needs-validation" novalidate>
      <div class="row">
        <div class="col position-relative mb-3">
          <label for="patente" class="form-label">Ingrese la patente del vehículo a transferir</label>
          <div class="input-group">
            <input type="text" name="patente" id="patente" class="form-control" value="<?php echo $_SESSION['patente'] ?>">
            <a href="./verAutos.php?origen=cambioDuenio" class="input-group-text"><i class="bi bi-search"></i></a>
          </div>
        </div>
        <div class="col position-relative mb-3">
          <label for="nroDni" class="form-label">Ingrese el documento de identidad del nuevo dueño</label>
          <div class="input-group">
          <input type="text" name="nroDni" id="nroDni" class="form-control" value="<?php echo $_SESSION['nroDni'] ?>">
          <a href="./listaPersonas.php?origen=cambioDuenio" class="input-group-text"><i class="bi bi-search"></i></a>
          </div>
        </div>
      </div>
      <input type="submit" value="Enviar">
    </form>
  </div>
</main>
<script src="../../js/validacionmk2.js"></script>

<?php include_once '../../estructura/pie.php';
?>