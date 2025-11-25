<?php

require '../../../../vendor/autoload.php';
require '../../../../bootstrap.php';
require '../../../../configuracion.php';

use TP5\Controladores\AbmUsuario;

$mensaje = "ERROR - No se pudo actualizar el registro.";
$datos = darDatosSubmitted();
if ($datos['estado'] == 'deshabilitado') {
  $fechaActual = getdate();
  $fecha = $fechaActual['year'] . "/" .  $fechaActual['mon'] . "/" . $fechaActual['mday']; 
  $datos['usdeshabilitado'] = $fecha;
} else {
  $datos['usdeshabilitado'] = null;
}
$abmUsuario = new AbmUsuario;
$respuesta = $abmUsuario->modificiacion($datos);
if ($respuesta) {
  $mensaje = "ÉXITO - El registro se actualizó correctamente.";
}

require_once '../../../estructura/cabecera-retorno.php'; ?>

<main class="container mt-5">
  <h4 class="text-center"><?php echo $mensaje ?></h4>
</main>

<?php require_once '../../../estructura/pie.php'; ?>