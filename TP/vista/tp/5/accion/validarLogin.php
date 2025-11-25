<?php

require '../../../../vendor/autoload.php';
require '../../../../bootstrap.php';
require '../../../../configuracion.php';

use TP5\Controladores\Session;
use TP5\Controladores\AbmUsuario;

$datos = darDatosSubmitted();

$respuesta = [
  [
    'mensaje' => "<h4 class='text-center text-danger'>ERROR - Nombre de usuario o contraseña incorrecto, intentelo nuevamente. Redireccionando</h4>",
    'redireccion' => 'refresh: 5; url=http://localhost/PWD/TP/vista/tp/5/login.php'
  ],
  [
    'mensaje' => "<h4 class='text-center text-success'>ÉXITO - Credenciales verificadas. Redireccionando.</h4>",
    'redireccion' => 'refresh: 5; url=http://localhost/PWD/TP/vista/tp/5/paginaSegura.php'
  ]
];

$sesion = new Session();
if ($sesion->validar($datos)) {
  $mensaje = $respuesta[1];
} else {
  $mensaje = $respuesta[0];
}

/*
$abmUsuario = new AbmUsuario();
$argumento['usnombre'] = $datos['usnombre'];
$resultado = $abmUsuario->buscar($argumento);



if ($resultado['success'] == 0) {
  // No se encontró usuario con ese usnombre
  $mensaje = $respuesta[0];
} else {
  // Se encontró usuario con ese nombre
  $arregloUsuario = $resultado['data']->toArray()[0];




  if ($arregloUsuario['uspass'] == $datos['uspass']) {
    // La contraseña es correcta
    $mensaje = $respuesta[1];

  } else {
    // La contraseña es incorrecta
    $mensaje = $respuesta[0];
  }
}
*/


include_once '../../../estructura/cabecera-retorno.php'; ?>

<main class="container mt-5">
  <?php 
  echo $mensaje['mensaje'];
  header($mensaje['redireccion']);
  ?>
</main>

<?php include_once '../../../estructura/pie.php'; ?>