<?php
include_once '../../../configuracion.php';

$objAbmAuto = new AbmPersona();
$arreglo = $objAbmAuto->arreglar("");

include_once '../../estructura/cabecera-retorno.php';

if (empty($arreglo)) {
  echo "<h3 class='text-center text-danger mt-4'>Tabla Persona sin registros en base de datos.</h3>";
} else {
  echo '<main class="container">';
  include './tablaElegirPersona.php';

  echo '<div class="card mb-5">';
  echo '<div class="card-body text-center">Si el dueño del vehículo no se encuentra en la lista, <a href="#divColapsable" data-bs-toggle="collapse" aria-expanded="false" aria-controls="divColapsable">clickee aquí</a>.</div>';
  echo '<div class="collapse mx-auto mb-5" id="divColapsable">';
  echo '<div class="card card-body">';
  echo '<h4 class="text-center mb-5">FORMULARIO DE ALTA - PERSONA</h4>';
  include_once './formularioPersona.php';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</main>';
  echo '<script src="../../js/validacionmk2.js"></script>';
}

include_once '../../estructura/pie.php' ?>