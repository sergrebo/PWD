<?php
include_once '../../../configuracion.php';

$datos = darDatosSubmitted();
//print_r($datos);
$objAbmAuto = new AbmAuto();
$arregloAutos = $objAbmAuto->arreglar($datos);
//print_r($arregloAutos);

include_once '../../estructura/cabecera-retorno.php';

if (empty($arregloAutos)) {
  echo "<h3 class='text-center text-danger mt-4'>Vehículo no encontrado.</h3>";
} else {
  echo "<h3 class='text-center text-success mt-4'>Vehículo encontrado exitosamente.</h3>";
  echo "<main class='container'>";
  include './tablaAutos.php';
  echo "</main>";
}

include_once '../../estructura/pie.php' ?>