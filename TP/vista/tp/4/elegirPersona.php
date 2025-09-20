<?php
include_once '../../../configuracion.php';

$objAbmAuto = new AbmPersona();
$arreglo = $objAbmAuto->arreglar("");

include_once '../../estructura/cabecera-retorno.php';

if (empty($arreglo)) {
  echo "<h3 class='text-center text-danger mt-4'>Tabla Persona sin registros en base de datos.</h3>";
} else {
  include './tablaElegirPersona.php';
}

include_once '../../estructura/pie.php' ?>