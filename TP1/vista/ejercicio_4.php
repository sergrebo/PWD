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
    <h1>Ejercicio 4</h1>
    <p>
      Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
      esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
      persona es mayor de edad o no; (si la edad es mayor o igual a 18).
      Enviar los datos usando el método GET y luego probar de modificar los datos
      directamente en la url para ver los dos posibles mensajes.
    </p>

    <form action="./action/action_ejercicio_4.php" method="get">
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