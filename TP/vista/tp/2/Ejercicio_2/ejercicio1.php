
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Numero</title>
</head>
<body> -->
<?php
include_once '../../../estructura/cabecera-retorno.php';
?>
  <main class="container mt-4">
    <h1>Ejercicio N°1</h1>
    <h3>Consigna</h3>
    <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.</p>
    <div class="col-4 mx-auto mt-4">
      <form action="./action/action_ej1.php" method="get" id="formulario" class="needs-validation" novalidate>
        <div class="mb-3 position-relative">
          <label for="numero" class="form-label">Número: </label>
          <input type="text" name="numero" id="numero" class="form-control" required>
        </div>
        <input type="submit" class="btn btn-primary">
      </form>
    </div>
  </main>
  <script src="../../../js/validacion.js"></script>
<?php
  include_once '../../../estructura/pie.php';
?>  
<!-- </body>
</html> -->