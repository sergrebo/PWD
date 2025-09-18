<?php

/**
 * Ejercicio 3 – Crear   una   pagina   php   “VerAutos.php”,   en   ella   usando   la   capa   de   control   correspondiente mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido. En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay autos cargados.
 */

include_once '../../../configuracion.php';

$objAbmAuto = new AbmAuto();
$arreglo = $objAbmAuto->arreglar("");

include_once '../../estructura/cabecera-retorno.php';

if (empty($arreglo)) {
  echo "<h3 class='text-center text-danger mt-4'>Tabla AUTO sin registros en base de datos.</h3>";
} else {
  include './tablaAutos.php';
}

include_once '../../estructura/pie.php' ?>

