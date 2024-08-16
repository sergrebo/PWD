<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>

<body>
  <h1>Ejercicio 2</h1>
  <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas
    de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
    Enviar los datos del formulario por el método Get a otra página php que los reciba y
    complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
    se cursan por semana.
  </p>
  <form action="./action/action_ejercicio_2.php" method="get">
    <fieldset>
      <legend>Ingrese las horas de cursada de la materia Programación Web Dinamica por cada día de la semana</legend>
      <label for="lunes">Lunes </label><input type="number" name="horas_lunes" id="lunes"><br>                    <!-- ¿El NAME debe ser igual al ID? -->
      <label for="martes">Martes </label><input type="number" name="horas_martes" id="martes"><br>
      <label for="miercoles">Miércoles </label><input type="number" name="horas_miercoles" id="miercoles"><br>
      <label for="jueves">Jueves </label><input type="number" name="horas_jueves" id="jueves"><br>
      <label for="viernes">Viernes </label><input type="number" name="horas_viernes" id="viernes"><br>
      <input type="submit" value="Enviar">
    </fieldset>
    
  </form>
</body>

</html>