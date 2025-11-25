<?php 

require '../../../../vendor/autoload.php';
require '../../../../bootstrap.php';

use TP5\Controladores\AbmUsuario;

//print_r($_GET);
$abmUsuario = new AbmUsuario;
$usuario = $abmUsuario->buscar($_GET)['data']->toArray()[0];
//print_r($usuario);


include_once '../../../estructura/cabecera-retorno.php'; ?>

<main class="container mt-5">
  <?php include_once '../formUsuario.php' ?>
</main>

<?php include_once '../../../estructura/pie.php' ?>