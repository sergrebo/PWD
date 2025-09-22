<?php 
/**
 * Ejercicio 7 – Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php” busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa  de control antes generada, no se puede acceder directamente a las clases del ORM.
 */

include_once '../../estructura/cabecera-retorno.php';
?>

<main class="container mt-4">
  <div class="col">
    <form action="./accionBuscarPersona.php?origen=buscarPersona" method="post" id="formulario" class="needs-validation" novalidate>
      <div class="position-reative mb-3">
        <label for="nroDni" class="form-">Ingrese el número de documento de la persona buscada</label>
        <div class="input-group">
          <input type="text" class="form-control" name="nroDni" id="nroDni">
          <input type="submit" value="Buscar persona" class="btn btn-outline-secondary border border-1">
        </div>
      </div>
    </form>
  </div>
</main>
<script src="../../js/validacionmk2.js"></script>

<?php include_once '../../estructura/pie.php' ?> 