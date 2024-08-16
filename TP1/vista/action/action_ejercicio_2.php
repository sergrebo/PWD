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
  <title>Cantidad de horas</title>
</head>
<body>
  <h1>Ejercicio 2 - Respuestra</h1>
  <p>Curso Programación Web Dinamica <strong><?php echo $nroHoras ?></strong> horas a la semana</p>
</body>
</html>