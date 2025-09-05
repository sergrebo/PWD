<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Form Saludo</title>
</head>
<body> -->
<?php
  include_once '../../estructura/cabecera-retorno.php';
?>
  <h1>Ejercicio N°6</h1>
  <h3>Consigna</h3>
  <p>Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página que procesa el formulario la cantidad de deportes que practica.</p>
  <form action="./action/action_ej6.php" method="get">
    <div>
      <label for="nombre">Nombre</label> 
      <input type="text" name="nombre" id="nombre" required pattern="[A-Za-z]+" title="El campo solo puede ser completado con letras.">
    </div>
    <div>
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" id="apellido" required pattern="[A-Za-z]+" title="El campo solo puede ser completado con letras.">
    </div> 
    <div>
      <label for="edad">Edad</label>
      <input type="number" name="edad" id="edad" required min="0">
    </div> 
    <div>
      <label for="direccion">Direccion</label>
      <input type="text" name="direccion" id="direccion" required>
    </div>
    <br>
    <div>
      <div>
        <h5>Nivel de Estudios</h5>
        <label for="nivel">No tiene estudios</label>
        <input type="radio" value="no" name="opcion" required><br>

        <label for="">Estudios primarios</label>
        <input type="radio" value="primario" name="opcion" required><br>

        <label for="">Estudios secundarios</label>
        <input type="radio" value="secundario" name="opcion" required><br>
      </div>
      <br>
      <div>
        <h5>Sexo</h5>
        <select name="genero" id="genero" required>
          <option value="" disabled selected>Seleccione sexo</option>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
        </select>
      </div>
      <div>
        <h3>¿Que deportes practicas?</h3>
        <label for="">Futbol
          <input type="checkbox" value="Futbol" name="deporte[]">
        </label>
        <label for="">Basket
          <input type="checkbox" value="Basket" name="deporte[]">
        </label>
        <label for="">Tennis
          <input type="checkbox" value="Tennis" name="deporte[]">
        </label>
        <label for="">Voley
          <input type="checkbox" value="Voley" name="deporte[]">
        </label>
      </div>
      <br>
      <input type="submit">
    </div>
  </form>
<!-- </body>
</html> -->
<?php
  include_once '../../estructura/pie.php';
?>