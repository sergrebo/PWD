<?php 

require '../../../vendor/autoload.php';

use TP5\Controladores\Session;

$sesion = new Session();
$sesion->cerrar();
header('Location: http://localhost/PWD/TP/vista/tp/5/login.php');

?>