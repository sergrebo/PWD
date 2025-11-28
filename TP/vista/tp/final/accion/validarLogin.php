<?php
session_start();

require '../../../../configuracion.php';
require '../../../../vendor/autoload.php';
require '../../../../bootstrap_test.php';

use TPfinal\Controladores\AbmUsuario;
use TPfinal\Controladores\Session;

$datos = darDatosSubmitted();

$respuesta = [
  [
    'mensaje' => "<h4 class='text-center text-danger'>ERROR - Nombre de usuario o contraseña incorrecto, intentelo nuevamente. Redireccionando...</h4>",
    'redireccion' => 'refresh: 3; url=http://localhost/PWD/TP/vista/tp/final/login.php'
  ],
  [
    'mensaje' => "<h4 class='text-center text-success'>ÉXITO - Credenciales verificadas. Redireccionando...</h4>",
    'redireccion' => 'refresh: 3; url=http://localhost/PWD/TP/vista/tp/final/listarUsuario.php'
  ]
];
// verEstructura($datos);

if (isset($datos['usnombre']) && isset($datos['uspasshash'])) {
  $abmUsuario = new AbmUsuario();
  $usuarios = $abmUsuario->buscar($datos)->toArray();

  // verEstructura($usuarios);

  if (!empty($usuarios)) {
    // Solo puede haber un unico usuario por cada usnombre.
    $usuario = $usuarios[0];
    if ($usuario['uspass'] === $datos['uspasshash']) {
      // Busco el usuario como objeto para acceder a sus relaciones
      $usuarioObj = $abmUsuario->buscar($datos)->first();

      // Accedo a la colección de roles
      $roles = $usuarioObj->roles;

      // Si quieres ver la estructura de los roles:
      // verEstructura($roles->toArray());

      // Inicio sesión
      $objSession = new Session();
      // Pasamos los roles (puedes pasarlos como array o colección, dependiendo de lo que necesites en la sesión)
      $objSession->iniciar($usuario['idusuario'], $usuario['usnombre'], $roles->toArray());


      // Redirijo al usuario a la página correspondiente. FALTA DEFINIR
      $mensaje = $respuesta[1];

    } else {
      // El usuario encontrado tiene una contraseña distinta a la proporcionada.
      $mensaje = $respuesta[0];
    }
  } else {
    // No se encontró usuario con ese 'usnombre'
    $mensaje = $respuesta[0];
  }
} else {
  // No se encontró usuario o contraseña en los datos proviniente del formulario.
  $mensaje = $respuesta[0];
}

include_once '../../../estructura/cabecera-retorno.php'; ?>

<main class="container mt-5">
  <?php
  echo $mensaje['mensaje'];
  header($mensaje['redireccion']);
  ?>
</main>

<?php include_once '../../../estructura/pie.php'; ?>