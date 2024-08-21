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
    
  <title>Signo número</title>
</head>

<body>
  <div class="container">
    <div class="mt-5">
      <h1>Ejercicio 1</h1>
      <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
        llamar a un script (vernumero.php) y visualizar un mensaje que indique si el número
        enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
        respuesta, que permita volver a la página anterior.</p>
      <div class="mt-5">
        <form action="./action/TP1_ej1_action.php" method="get" class="needs-validation" novalidate id="miFormulario">
          <div class="form-group mb-3">
            <label for="numero" class="form-label">Número </label>
            <input type="text" name="numero" id="numero" required class="form-control">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="./assets/js/TP1_ej1_validation.js"></script>

</body>

</html>