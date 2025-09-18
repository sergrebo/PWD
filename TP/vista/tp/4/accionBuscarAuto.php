<?php
include_once '../../../configuracion.php';

$datos = darDatosSubmitted();
//print_r($datos);
$objAbmAuto = new AbmAuto();
$arreglo = $objAbmAuto->arreglar($datos);
//print_r($arregloAuto);

include_once '../../estructura/cabecera-retorno.php';

if (empty($arreglo)) {
  echo "<h3 class='text-center text-danger mt-4'>Vehículo no encontrado.</h3>";
} else {
  echo "<h3 class='text-center text-success mt-4'>Vehículo encontrado exitosamente.</h3>";
  include './tablaAutos.php';
}

include_once '../../estructura/pie.php' ?>