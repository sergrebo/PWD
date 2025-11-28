<?php

require '../../../vendor/autoload.php';

use TPfinal\Controladores\Session;

session_start();

$sesion = new Session();
$sesion->cerrar();
header('Location: http://localhost/PWD/TP/vista/tp/final/login.php');

?>