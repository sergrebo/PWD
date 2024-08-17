<?php
include_once '../../control/Persona.php';
include_once '../../control/PersonaMenor.php';

if ($_GET) {
  if ($_GET['edad'] <= 0) {
    $saludo = 'Debe ingresar un numero de años mayor a cero';
  } elseif ($_GET['edad'] < 18) {
    $objPersonaMenor = new PersonaMenor($_GET['nombre'], $_GET['apellido'], $_GET['edad'], $_GET['direccion']);
    $saludo = $objPersonaMenor->saludar();
  } elseif ($_GET['edad'] >= 18) {
    $objPersona = new Persona($_GET['nombre'], $_GET['apellido'], $_GET['edad'], $_GET['direccion']);
    $saludo = $objPersona->saludar();
  }
  
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
  </main>
</body>

</html>