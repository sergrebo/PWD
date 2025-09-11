<?php

  include_once '../../../utils/funciones.php';
  include_once '../../../control/3/ArchivoTxt.php';

  $datos = darDatosSubmitted();

  $objArchivo = new Archivo();
  $respuesta = $objArchivo->subirArchivo($datos);

  if ($respuesta == 1) {
    $cadena = file_get_contents('../../archivos/' . $datos['miArchivoTxt']['name']);
  }

  $mensajes = [
    1 => "El archivo <a href='../../archivos/" . $datos['miArchivoTxt']['name'] . "' target='_blank'>" . $datos['miArchivoTxt']['name'] . "</a> se ha copiado con éxito.",
    0 => "Error, no se pudo cargar el archivo.",
    -1 => "Error, el archivo supera el tamaño máximo permitido.",
    -2 => "Error, tipo de archivo no permitido.",
    -3 => "Error, no se pudo acceder al archivo temporal."
  ];

  $mensaje = $mensajes[$respuesta];

  include_once '../../estructura/cabecera-retorno.php' ?>

  <div class="container mt-4">
    <h2>Estado del archivo</h2>
    <?php echo "<p>$mensaje</p>" ?>
    <div class="row">
      <div class="col form-group mb-3">
        <label for="textarea" class="form-label fw-bold">Contenido</label>
        <textarea name="textarea" id="textarea" class="form-control"> <?php echo $cadena ?> </textarea>
      </div>
    </div>
    <div class="row">
      <a href="./ejercicio1.php">Volver</a>
    </div>
  </div>

  <?php include_once '../../estructura/pie.php' ?>