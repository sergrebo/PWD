<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Form Calculadora</title>
</head>
<body> -->
<?php
  include_once '../../../estructura/cabecera-retorno.php';
?>
  <main class="container mt-4">
    <h1 class="mt-4 text-center">Ejercicio N°7</h1>
    <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación.</p>
    <div class="col-4 mx-auto">
      <form action="./action/action_ej7.php" method="get" id="formulario" class="needs-validation" novalidate>
        <div class="mb-3 position-relative">
          <input type="text" name="numero1" id="numero1" placeholder="Ingrese un número" required class="form-control">
        </div>
        <div class="mb-3 position-relative">
          <input type="text" name="numero2" id="numero2" placeholder="Ingrese un número" required class="form-control">
        </div>
        <div class="mb-3 position-relative">
          <select name="Operacion" id="Operacion" required class="form-select">
            <option value="" disabled selected>Selecciona una operación</option>
            <option value="SUMA">SUMA</option>
            <option value="RESTA">RESTA</option>
            <option value="MULTIPLICACION">MULTIPLICACIÓN</option>
            <option value="DIVISION">DIVISÓN</option>
          </select>
        </div>
        <div class="mb-3">
          <input type="submit" class="btn btn-primary mb-4">
        </div>
      </form>
    </div>
  </main>
  <script src="../../../js/validacion.js"></script>

<!-- </body>
</html> -->
<?php
  include_once '../../../estructura/pie.php';
?>