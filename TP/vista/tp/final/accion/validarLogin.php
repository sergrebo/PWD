<?php
session_start();

require '../../../../configuracion.php';

use TPfinal\Controladores\AbmUsuario;
use TPfinal\Controladores\Session;

$datos = darDatosSubmitted();

// verEstructura($datos);

if (isset($datos['usnombre']) && isset($datos['uspasshash'])) {
  $abmUsuario = new AbmUsuario();
  $usuarios = $abmUsuario->buscar($datos)->toArray();
  if (!empty($usuarios)) {
    $usuario = $usuarios[0];
    if ($usuario['uspass'] === $datos['uspasshash']) {
      // Busco el o los roles del usuario.
      $usRol = $abmUsuario->buscar($datos)->roles()->toArray();
      if (count($usRol) == 1) {
        $usRol = $usRol[0];
      }
      // Inicio sesión con la clase correspondiente.
      $objSession = new Session();
      $objSession->iniciar($usuario['idusuario'], $usuario['usnombre'], $usRol);
      

      // Redirijo al usuario a la página correspondiente. FALTA DEFINIR
      header('Location: ../../index.php');
      exit;


    } else {
      // El usuario encontrado tiene una contraseña distinta a la proporcionada.
    }
  } else {
    // No se encontró usuario con ese 'usnombre'
  }
} else {
  // No se encontró usuario o contraseña en los datos proviniente del formulario.
}
