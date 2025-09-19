<?php 

/**
 * Ejercicio 4a – Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero de patente de  un auto, estos datos deberán  ser enviados a una  pagina “accionBuscarAuto.php”  en donde usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con la   patente   ingresada   y   mostrar   los   datos   en   una   tabla.   También   deberán   mostrar   los   carteles   que   crean convenientes en caso de que no se encuentre ningún auto con la patente ingresada. Utilizar   css   y   validaciones   javaScript   cuando   crea   conveniente.   Recordar   usar   la   capa   de   control   antes generada, no se puede acceder directamente a las clases del ORM.
 */

include_once '../../estructura/cabecera-retorno.php' ?>

<main class="container">
  <form action="./accionBuscarAuto.php" method="get" id="formulario" class="needs-validation col-6 mx-auto mt-4" novalidate>
    <div class="mb-3 position-relative">
      <label for="patente" class="form-label">Ingrese la patente del auto buscado:</label>
      <div class="form-text">La patente ingresada debe tener el formato ABC 123 ó AB 123 BC.</div>
      <div class="input-group">
        <input type="text" name="patente" id="patente" class="form-control">
        <input type="submit" value="Buscar auto" class="btn btn-outline-secondary border border-1">
      </div>
    </div>
  </form>
</main>
<script src="../../js/validacionmk2.js"></script>

<?php include_once '../../estructura/pie.php' ?>