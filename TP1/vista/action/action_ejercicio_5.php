<?php
include_once '../../control/Saludo.php';
include_once '../../control/Estudios.php';

if ($_GET) {
  $objSaludo = new Saludo();
  $saludo = $objSaludo->saludar($_GET);
  $objEstudios = new Estudios();
  $estudios = $objEstudios->mostrarEstudios($_GET['edad'], $_GET['estudios']);
  $genero = 'Mi genero es ' . $_GET['sexo'];
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
    <h1>Ejercicio 5 - Resultado</h1>
    <p><?php echo $saludo ?></p>
    <p><?php echo $estudios ?></p>
    <p><?php echo $genero ?></p>
  </main>
</body>

</html>