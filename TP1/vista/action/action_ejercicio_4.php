<?php
include_once '../../control/Persona.php';
if ($_GET) {
  $objPersona = new Persona($_GET['nombre'], $_GET['apellido'], $_GET['edad'], $_GET['direccion']);
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
    <h1>Ejercicio 4 - Resultado</h1>
    <p><?php echo $saludo ?></p>
  </main>
</body>

</html>