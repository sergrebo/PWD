<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- jQuery validation plugin CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
  <!-- Bootstrap CDN via jsDelivr -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Cinem@s</title>
</head>

<body>
  <div class="container mt-2 border shadow-lg p-3 mb-5 bg-body-tertiary rounded">

      <h1 class="form-label fw-bold">Cinem@s</h1>
    
    <form action="./action/action_ejercicio_4.php" method="post" class="needs-validation" id="form" novalidate>

      <div class="row mb-3">
        <div class="form-group col">
          <label for="titulo" class="form-label fw-bold">Título</label>
          <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título">
        </div>
        <div class="form-group col">
          <label for="actores" class="form-label fw-bold">Actores</label>
          <input type="text" class="form-control" name="actores" id="actores" placeholder="Actores">
        </div>
      </div>

      <div class="row mb-3">
        <div class="form-group col">
          <label for="director" class="form-label fw-bold">Director</label>
          <input type="text" class="form-control" name="director" id="director" placeholder="Director">
        </div>
        <div class="form-group col">
          <label for="guion" class="form-label fw-bold">Guión</label>
          <input type="text" class="form-control" name="guion" id="guion" placeholder="Guión">
        </div>
      </div>

      <div class="row mb-3">
        <div class="form-group col-6">
          <label for="produccion" class="form-label fw-bold">Producción</label>
          <input type="text" class="form-control" name="produccion" id="produccion">
        </div>
        <div class="form-group col-2">
          <label for="anio" class="form-label fw-bold">Año</label>
          <input type="text" class="form-control" name="anio" id="anio">
        </div>
      </div>

      <div class="row mb-3">
        <div class="form-group col-6">
          <label for="nacionalidad" class="form-label fw-bold">Nacionalidad</label>
          <input type="text" class="form-control" name="nacionalidad" id="nacionalidad">
        </div>
        <div class="form-group col-4">
          <label for="genero" class="form-label fw-bold">Género</label>
          <select class="form-select" id="genero" name="genero">
            <option selected>Comedia</option>
            <option>Drama</option>
            <option>Terror</option>
            <option value="Romanticas">Románticas</option>
            <option>Suspenso</option>
            <option>Otras</option>
          </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="form-group col-4">
          <label for="duracion" class="form-label fw-bold">Duración</label>
          <input type="text" class="form-control" name="duracion" id="duracion">
          <span>(minutos)</span>
        </div>
        <div class="form-group col-6">
          <label for="restricciones" class="form-label fw-bold">Restricciones de edad</label>
          <div class="row">
            <div class="form-check col">
              <input type="radio" class="form-check-input" name="restricciones" id="todos">
              <label for="todos" class="form-check-label">Todos los públicos</label>
            </div>
            <div class="form-check col">
              <input type="radio" class="form-check-input fw-bold" name="restricciones" id="mayores7">
              <label for="mayores7" class="form-check-label">Mayores de 7 años</label>
            </div>
            <div class="form-check col">
              <input type="radio" class="form-check-input fw-bold" name="restricciones" id="mayores18">
              <label for="mayores18" class="form-check-label">Mayores de 18 años</label>
            </div>
          </div>
        </div>
      </div>


      <div class="row mb-3">
        <div class="form-group">
          <label for="sinopsis" class="form-label fw-bold">Sinópsis</label>
          <textarea name="sinopsis" id="sinopsis" class="form-control col-12"></textarea>
        </div>
      </div>

      <div class="d-grid gap-1 d-md-flex justify-content-md-end">
        <input type="submit" value="Enviar" class="btn btn-primary">
        <input type="reset" value="Borrar" class="btn btn-light">
      </div>


    </form>
  </div>
  <script src="./assets/js/ejercicio_4_validation.js"></script>
</body>

</html>