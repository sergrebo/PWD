<?php
require '../../../configuracion.php';
require '../../../vendor/autoload.php';
require '../../../bootstrap_test.php';

use TPfinal\Controladores\AbmUsuario;

$abmUsuario = new AbmUsuario();
$usuarios = $abmUsuario->buscar([]);
// verEstructura($usuarios);
$result = [];
foreach ($usuarios as $usuario) {
  $result[] = $usuario;
}
// verEstructura($result);
echo json_encode($result);