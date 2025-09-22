<?php
include_once '../../../configuracion.php';

$datos = darDatosSubmitted();
$objAbmPersona = new AbmPersona();
$respuesta = $objAbmPersona->modificacion($datos);
if (!$respuesta) {
  $mensaje = "<h4 class='text-center text-danger'>ERROR - No se pudo cargar el registro a base de datos.</h4>";
} else {
  $mensaje = "<h4 class='text-center text-success'>Carga de registro exitosa.</h4>";
}

include_once '../../estructura/cabecera-retorno.php';

echo '<main class="container mt-4">';
echo $mensaje;
echo '</main>';

include_once '../../estructura/pie.php';
?>