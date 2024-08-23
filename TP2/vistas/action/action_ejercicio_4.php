<?php
include_once '../../utils/funciones.php';
include_once '../../control/Impresion.php';


$datos = darDatosSubmitted();
if ($datos) {
  $objImpresion = new Impresion;
  $aImprimir = $objImpresion->imprimir($datos);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN via jsDelivr -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <title>Impresión</title>
</head>

<body>
  <div class="container bg-success bg-opacity-10 border border-secondary-subtle mt-2">
    <div class="text-end">
      <a href="../ejercicio_4.php">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x m-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M18 6l-12 12" />
        <path d="M6 6l12 12" />
      </svg>
      </a>
      
    </div>
    <div class="text-primary mb-3 fw-light">
      <h1>La pelicula introducida es</h1>
    </div>
    <div class="text-success mb-3">
      <?php echo $aImprimir ?>
    </div>


  </div>

</body>

</html>