<?php

  include_once "../../../../control/1/Horas.php";
  include_once "../../../../utils/funciones.php";

  $datos = darDatosSubmitted();

  $obj = new Horas;
  $horasTotales = $obj->sumaHoras($datos);


?>

<!--     <!DOCTYPE html>
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
    <p>Cantidad de horas semanales: <strong> <?php echo $horasTotales ?> </strong></p> 
  </div>
<!--     </body>
  </html> -->
<?php
  include_once '../../../estructura/pie.php';
?>


