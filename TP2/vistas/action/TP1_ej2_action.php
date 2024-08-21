<?php
include_once '../../control/Horas.php';
if ($_GET) {
  $arreglo = [];
  foreach ($_GET as $dia => $horas) {           // ¿array_values?
    array_push($arreglo, $horas);         // ¿qué debo hacer en ACTION (¿convertir el arreglo asociativo en indexado?) y qué en CONTROL (¿sumar los valores del arreglo?)?
  }
  $obj = new Horas;
  $nroHoras = $obj->sumatoriaHoras($arreglo);
} else {
  echo 'No se recibieron datos';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <title>Cantidad de horas</title>
</head>

<body>
  <div class="container">
    <h1 class="mt-3">Ejercicio 2 - Respuestra</h1>
    <p class="mt-3">Curso Programación Web Dinamica <strong><?php echo $nroHoras ?></strong> horas a la semana</p>
  </div>

</body>

</html>