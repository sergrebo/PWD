<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Operación matemática</title>
</head>

<body>
  <main>
    <h1>Ejercicio 7</h1>
    <p>
      Crear una página con un formulario que contenga dos input de tipo text y un select. En
      los inputs se ingresarán números y el select debe dar la opción de una operación
      matemática que podrá resolverse usando los números ingresados. En la página que
      procesa la información se debe mostrar por pantalla la operación seleccionada, cada
      uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
      formulario:
    </p>
    <form action="./action/action_ejercicio_7.php" method="get">
      <fieldset>
        <legend>Operación</legend>
        <div>
          <label for="primero">Primer número </label><input type="text" name="primero" id="primero">
        </div>
        <div>
          <label for="segundo">Segundo número </label><input type="text" name="segundo" id="segundo">
        </div>
        <div>
          <select name="operacion" id="operacion">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACIÓN</option>
          </select>
          <input type="submit" value="Enviar">
        </div>
      </fieldset>
    </form>
  </main>

</body>

</html>