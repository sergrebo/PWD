<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form horas</title>
</head>
<body> -->
<?php
  include_once '../../../estructura/cabecera-retorno.php';
?>
  <div class="container">
    <h1 class="mt-4 text-center">Ejercicio N°2</h1>
    <h3>Consigna</h3>
    <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana.</p>
    <div class="mt-4 col-4 mx-auto">
      <h3>Horas de cursado</h3>
      <form action="./action/action_ej2.php" method="get" id="formulario" class="needs-validation" novalidate>
        <h5>Ingrese las horas</h5>
          <div class="mb-3 position-relative">
            <label for="hora-lunes">Lunes</label>
            <input type="text" name="horaLunes" id="hora-lunes" required class="form-control">
          </div> 
          <div class="mb-3 position-relative">
            <label for="hora-martes">Martes</label>
            <input type="text" name="horaMartes" id="hora-martes" required class="form-control">
          </div> 
          <div class="mb-3 position-relative">
            <label for="hora-miercoles">Miercoles</label>
            <input type="text" name="horaMiercoles" id="hora-miercoles" required class="form-control">
          </div>  
          <div class="mb-3 position-relative">
            <label for="hora-jueves">Jueves</label>
            <input type="text" name="horaJueves" id="hora-jueves" required class="form-control">
          </div> 
          <div class="mb-3 position-relative">
            <label for="hora-viernes">Viernes</label>
            <input type="text" name="horaViernes" id="hora-viernes" required class="form-control">
          </div>
          <input type="submit" class="btn btn-primary mb-4">
      </form>
    </div>
  </div>
  <script src="../../../js/validacion.js"></script>
<!-- </body>
</html> -->

<?php
  include_once '../../../estructura/pie.php';
?>