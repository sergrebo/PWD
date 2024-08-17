<?php
include_once '../../control/Saludo.php';
if ($_GET) {
  $obj = new Saludo();
  $saludo = $obj->saludar($_GET);
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
  <title>Presentación</title>
</head>

<body>
  <main>
    <h1>Ejercicio 3 - Resultado</h1>
    <p><?php echo $saludo ?></p>
  </main>
</body>

</html>