<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- jQuery CDN y jQuery validation plugin CDN -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <title>Horas PWD</title>
</head>

<body>
  <div class="container">
    <h1 class="mt-1">Ejercicio 2</h1>
    <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana.</p>

    <div>
      <form action="./action/TP1_ej2_action.php" method="get" id="formulario" class="needs-validation" novalidate>

        <div class="mb-3 form-group">
          <label for="lunes" class="form-label">Lunes</label>
          <input type="text" name="horas_lunes" id="lunes" class="form-control required-number" required>
        </div>

        <div class="mb-3 form-group">
          <label for="martes" class="form-label">Martes</label>
          <input type="text" name="horas_martes" id="martes" class="form-control required-number" required>
        </div>

        <div class="mb-3 form-group">
          <label for="miercoles" class="form-label">Miércoles</label>
          <input type="text" name="horas_miercoles" id="miercoles" class="form-control required-number" required>
        </div>

        <div class="mb-3 form-group">
          <label for="jueves" class="form-label">Jueves</label>
          <input type="text" name="horas_jueves" id="jueves" class="form-control required-number" required>
        </div>

        <div class="mb-3 form-group">
          <label for="viernes" class="form-label">Viernes</label>
          <input type="text" name="horas_viernes" id="viernes" class="form-control required-number" required>
        </div>

        <div>
          <input type="submit" value="Enviar" class="btn btn-primary">
        </div>

      </form>
    </div>

  </div>

  <script src="./assets/js/TP1_ej2_validation.js"></script>
</body>

</html>