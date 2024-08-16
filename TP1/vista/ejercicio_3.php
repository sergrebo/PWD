<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Presentación</title>
</head>

<body>
  <main>
    <h1>Ejercicio 3</h1>
    <p>
      Crear una página php que contenga un formulario HTML como el que se indica en la
      imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
      que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
      nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
      Cambiar el método Post por Get y analizar las diferencias
    </p>

    <form action="./action/action_ejercicio_3.php" method="get">
      <div>
        <label for="nombre">Nombre </label><input type="text" name="nombre" id="nombre">
      </div>
      <div>
        <label for="apellido">Apellido </label><input type="text" name="apellido" id="apellido">
      </div>
      <div>
        <label for="edad">Edad </label><input type="number" name="edad" id="edad">
      </div>
      <div>
        <label for="direccion">Dirección </label><input type="text" name="direccion" id="direccion">
      </div>
      <div>
        <input type="submit" value="Enviar">
      </div>
    </form>
  </main>

</body>

</html>