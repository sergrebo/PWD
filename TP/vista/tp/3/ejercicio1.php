<!--
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1</title>
</head>
<body>
-->
<?php include_once '../../estructura/cabecera-retorno.php' ?>

  <div class="container mt-4">
    <h1 class="text-center">Ejercicio 1</h1>
    <p>Crear un formulario HTML que permita subir un archivo. En el servidor se deberá controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo cargado, en caso contrario mostrar un mensaje indicando el problema. </p>
    <div class="col-5 mx-auto">
      <form action="./subirArchivo.php" method="post" enctype="multipart/form-data" id="formulario" class="needs-validation" novalidate>
        <div class="mb-3 position-relative">
          <label for="file" class="form-label">Selecciona un archivo (.doc o .pdf):</label>
          <div class="input-group">
            <input type="file" name="miArchivo" id="miArchivo" class="form-control" required>
            <input type="submit" name="input_submit" id="input_submit" class="btn btn-outline-secondary border border-1 fs-6" value="Subir archivo">
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="../../js/validacion.js"></script>


<?php include_once '../../estructura/pie.php' ?>
<!--  
</body>
</html>