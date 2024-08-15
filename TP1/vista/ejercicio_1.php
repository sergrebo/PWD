<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signo número</title>
</head>

<body>
  <h1>Ejercicio 1</h1>
  <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
    llamar a un script (vernumero.php) y visualizar un mensaje que indique si el número
    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
    respuesta, que permita volver a la página anterior.</p>
  <form action="./action/action_ejercicio_1.php" method="get">
    <label for="numero">Número </label><input type="number" name="numero" id="numero">
    <input type="submit" value="Enviar">
  </form>
</body>

</html>