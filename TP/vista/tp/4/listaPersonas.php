<?php
/**
 * Ejercicio 3b – Crear una página "listaPersonas.php" que muestre un listado con las personas que se encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
 */

include_once '../../../configuracion.php';

$objAbmAuto = new AbmPersona();
$arreglo = $objAbmAuto->arreglar("");

include_once '../../estructura/cabecera-retorno.php';

if (empty($arreglo)) {
  echo "<h3 class='text-center text-danger mt-4'>Tabla Persona sin registros en base de datos.</h3>";
} else {
  include './tablaPersonas.php';
}

include_once '../../estructura/pie.php' ?>
