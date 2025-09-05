<?php

  include_once '../../../../control/1/ControladorNumero.php';
  include_once '../../../../utils/funciones.php';


  $datos = darDatosSubmitted();

  $controlador = new ControladorNumero();

  $mensaje =  $controlador->signoNumero($datos['numero']);



?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>
<body> -->
<?php
  include_once '../../../estructura/cabecera-retorno.php';
?>
  <div>
    <h1>Resultado</h1>
    <p>El numero es <?php echo $mensaje ?></p>
    <a href="../ejercicio1.php">Volver a ingregar un numero</a>
  </div>
<!-- </body>
</html> -->
<?php
  include_once '../../../estructura/pie.php';
?>