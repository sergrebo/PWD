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

  <title>Presentación</title>
</head>

<body>
  <div class="container">
    <h1>Ejercicio 6</h1>
    <p>Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página que procesa el formulario la cantidad de deportes que practica.</p>

    <form action="./action/TP1_ej6_action.php" method="post" id="formulario" class="needs-validation" novalidate>
      <div class="mb-3 form-group">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" required class="form-control">
      </div>
      <div class="mb-3 form-group">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido" id="apellido" required class="form-control">
      </div>
      <div class="mb-3 form-group">
        <label for="edad" class="form-label">Edad</label>
        <input type="text" name="edad" id="edad" required class="form-control">
      </div>
      <div class="mb-3 form-group">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" name="direccion" id="direccion" required class="form-control">
      </div>

      <div class="row">
        <div class="col mb-3 form-group">
          <fieldset>
            <legend>Nivel de estudios</legend>
            <div class="form-check">
              <input type="radio" name="estudios" id="no" value="no" required class="form-check-input">
              <label for="no" class="form-check-label">No tiene estudios</label>
            </div>
            <div class="form-check">
              <input type="radio" name="estudios" id="primario" value="primario" required class="form-check-input">
              <label for="primario" class="form-check-label">Estudios primarios</label>
            </div>
            <div class="form-check">
              <input type="radio" name="estudios" id="secundario" value="secundario" required class="form-check-input">
              <label for="secundario" class="form-check-label">Estudios secundarios</label>
            </div>
          </fieldset>
        </div>
        <div class="col mb-3 form-group">
          <fieldset>
            <legend>Sexo</legend>
            <div class="form-check">
              <input type="radio" name="sexo" id="femenino" value="femenino" required class="form-check-input">
              <label for="femenino" class="form-check-label">Femenino</label>
            </div>
            <div class="form-check">
              <input type="radio" name="sexo" id="masculino" value="masculino" required class="form-check-input">
              <label for="masculino" class="form-check-label">Masculino</label>
            </div>
          </fieldset>
        </div>
        <div class="col mb-3 form-group">
          <fieldset>
            <legend>Deportes</legend>
            <div class="form-check">
              <input type="checkbox" name="futbol" id="futbol" value="futbol" class="form-check-input">
              <label for="futbol" class="form-check-label">Futbol</label>
            </div>
            <div class="form-check">
              <input type="checkbox" name="basket" id="basket" value="basket" class="form-check-input">
              <label for="basket" class="form-check-label">Basket</label>
            </div>
            <div class="form-check">
              <input type="checkbox" name="tenis" id="tenis" value="tenis" class="form-check-input">
              <label for="tenis" class="form-check-label">Tenis</label>
            </div>
            <div class="form-check">
              <input type="checkbox" name="voley" id="voley" value="voley" class="form-check-input">
              <label for="voley" class="form-check-label">Voley</label>
            </div>
          </fieldset>
        </div>
      </div>


      <div>
        <input type="submit" value="Enviar" class="btn btn-primary">
      </div>
    </form>
  </div>

</body>

</html>