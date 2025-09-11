<?php

  include_once '../../../utils/funciones.php';
  include_once '../../../control/3/Archivo.php';

  $datos = darDatosSubmitted();

  $objArchivo = new Archivo();
  $respuesta = $objArchivo->subirArchivo($datos);

  $mensajes = [
    1 => "El archivo <a href='../../archivos/" . $datos['miArchivo']['name'] . "' target='_blank'>" . $datos['miArchivo']['name'] . "</a> se ha copiado con éxito.",
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
    <a href="./ejercicio1.php">Volver</a>
  </div>

  <?php include_once '../../estructura/pie.php' ?>