<?php 
include_once '../../control/Impresion.php';

if ($_POST) {
  $objImpresion = new Impresion; 
  $aImprimir = $objImpresion -> imprimir($_POST);
  
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Impresión</title>
</head>
<body>
  <h1>La pelicula introducida es</h1>
  <?php echo $aImprimir ?>
</body>
</html>