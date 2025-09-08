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
    <h1 class="text-center">Ejercicio 2</h1>
    <p> Crear un formulario que permita subir un archivo. En el servidor se deberá controlar que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su contenido en un textarea. (OBS: Referencia a funciones para trabajar con archivos http://php.net/manual/en/ref.filesystem.php)</p>
    <div class="col-5 mx-auto">
      <form action="./subirArchivoTxt.php" method="post" enctype="multipart/form-data" id="formulario" class="needs-validation" novalidate>
        <div class="mb-3 position-relative">
          <label for="file" class="form-label">Selecciona un archivo (.txt):</label>
          <div class="input-group">
            <input type="file" name="miArchivoTxt" id="miArchivo" class="form-control" accept=".txt" required>
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