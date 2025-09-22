<?php
include_once '../../../configuracion.php';

$datos = darDatosSubmitted();
$objAbmPersona = new AbmPersona();
$arregloAux = $objAbmPersona->arreglar($datos);
$arreglo = $arregloAux[0];
//print_r($arreglo);

include_once '../../estructura/cabecera-retorno.php';

echo '<main class="container mt-4">';
include_once './formularioPersona.php';
echo '</main>';
echo '<script src="../../js/validacionmk2.js"></script>';

include_once '../../estructura/pie.php';
?>