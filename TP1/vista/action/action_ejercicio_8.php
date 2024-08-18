<?php
include_once '../../control/Boleteria.php';

if ($_GET) {
  $objBoleteria = new Boleteria;
  $precio = $objBoleteria->calcularBoleto($_GET);
} else {
  echo "No se recibieron datos";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Cine Cinem@as</title>
</head>

<body>
  <main>
    <h1>Ejercicio 8 - Resultado</h1>
    <p>Su precio es de $<?php echo $precio ?>.00 </p>
    <a href="../ejercicio_8.php"><button type="button">Volver</button></a>
  </main>
</body>

</html>