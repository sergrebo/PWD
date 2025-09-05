<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form horas</title>
</head>
<body> -->
<?php
    include_once '../../estructura/cabecera-retorno.php';
?>
<h1>Ejercicio N°2</h1>
<h3>Consigna</h3>
<p>Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana.</p>
<h3>Horas de cursado</h3>
<form action="action/action_ej2.php" method="get">
<p>Ingrese las horas</p>
<div>
  <label for="hora-lunes">Lunes</label>
  <input type="number" name="hora-lunes" id="hora-lunes" required min="0">
</div> 
<div>
  <label for="hora-martes">Martes</label>
  <input type="number" name="hora-martes" id="hora-martes" required min="0">
</div> 
<div>
  <label for="hora-miercoles">Miercoles</label>
  <input type="number" name="hora-miercoles" id="hora-miercoles" required min="0">
</div>  
<div>
  <label for="hora-jueves">Jueves</label>
  <input type="number" name="hora-jueves" id="hora-jueves" required min="0">
</div> 
<div>
  <label for="hora-viernes">Viernes</label>
  <input type="number" name="hora-viernes" id="hora-viernes" required min="0">
</div>
<input type="submit">
</form>
<!-- </body>
</html> -->

<?php
    include_once '../../estructura/pie.php';
?>