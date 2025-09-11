<?php

include_once '../../../control/1/ControladorNumero.php';
include_once '../../../utils/funciones.php';

$datos = darDatosSubmitted();
$controlador = new ControladorNumero();
$mensaje =  $controlador->signoNumero($datos['numero']);

  include_once '../../estructura/cabecera-retorno.php' ?>

  <div class="container mt-4">
    <h1>Resultado</h1>
    <p>El numero es <?php echo $mensaje ?></p>
    <a href="./ejercicio1.php">Volver a ingresar un numero</a>
  </div>

<?php include_once '../../estructura/pie.php' ?>