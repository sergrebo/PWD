<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Cine Cinem@s</title>
</head>

<body>
  <main>
    <h1>Ejercicio 8</h1>
    <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
      función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
      clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
      es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
      de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
      formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
      un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
      Agregar un botón para limpiar el formulario y volver a consultar.</p>
    <h2>Cine Cinem@as</h2>
    <h3>Boletería</h3>
    <form action="./action/action_ejercicio_8.php" method="get">
      <fieldset>
        <legend>Ingrese sus datos personales</legend>
        <div>
          <label for="edad">¿Es menor de 12 años? </label><input type="radio" name="edad" id="si" value="si"><label for=""> Si </label><input type="radio" name="edad" id="no" value="no"><label for=""> No</label>
        </div>
        <div>
          <label for="estudiante">¿Es estudiante? </label><input type="radio" name="estudiante" id="si" value="si"><label for=""> Si </label><input type="radio" name="estudiante" id="no" value="no"><label for=""> No</label>
        </div>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
      </fieldset>
    </form>
  </main>
</body>

</html>