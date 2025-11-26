<?php
session_start();

require '../../../../configuracion.php';

use TPfinal\Controladores\AbmUsuario;

$datos = darDatosSubmitted();
if (isset($datos['usnombre']) && isset($datos['uspass'])) {
  $abmUsuario = new AbmUsuario();
  $abmUsuario->buscar($datos);
} else {
  // No se encontró usuario o contraseña en los datos proviniente del formulario.
}
