<?php
include_once '../../control/Numero.php';
  if ($_GET) {
    $numero = $_GET['numero'];
    $obj = new Numero;
    $respuesta = $obj->darSigno($numero);

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
  <title>Resultado</title>
</head>
<body>
  <h1>Ejercicio 1 - Resultado</h1>
  <p>El número ingresado es <strong><?php echo $respuesta ?></strong></p>
  <a href="../ejercicio_1.php">Ingresar otro numero</a>
</body>
</html>