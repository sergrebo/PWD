<?php

include_once '../../../utils/funciones.php';
include_once '../../../control/3/ControlPelicula.php';

$metodo = darDatosSubmitted();
//var_dump($metodo);
$objControlador = new ControlPelicula();
$arregloDetalle = $objControlador->mostrarDetallePelicula($metodo);
//print_r($arregloDetalle);

?>
<!--
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detalle película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
-->

<?php
include_once '../../estructura/cabecera-retorno.php';
?>


<body>


    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow" style="background-color: var(--bs-success-bg-subtle);">
            <div class="col p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-medium lh-1 mb-5 text-primary">
                    La película introducida es
                </h1>
                <p class="lead text-success"><span class="fw-bold">Título: </span><?php echo $arregloDetalle['titulo']; ?></p>
                <p class="lead text-success"><span class="fw-bold">Actores: </span><?php echo $arregloDetalle['actores']; ?></p>
                <p class="lead text-success"><span class="fw-bold">Director: </span><?php echo $arregloDetalle['director']; ?></p>
                <p class="lead text-success"><span class="fw-bold">Guion: </span><?php echo $arregloDetalle['guion']; ?></p>
                <p class="lead text-success"><span class="fw-bold">Producción: </span><?php echo $arregloDetalle['produccion']; ?></p>
                <p class="lead text-success"><span class="fw-bold">Año: </span><?php echo $arregloDetalle['anio']; ?></p>
                <p class="lead text-success"><span class="fw-bold">Nacionalidad: </span><?php echo $arregloDetalle['nacionalidad']; ?></p>
                <p class="lead text-success"><span class="fw-bold">Género: </span><?php echo $arregloDetalle['genero']; ?></p>
                <p class="lead text-success"><span class="fw-bold">Duración: </span><?php echo $arregloDetalle['duracion']; ?></p>
                <p class="lead text-success"><span class="fw-bold">Edad Permitida: </span><?php echo $arregloDetalle['restricciones']; ?></p>
                <p class="lead text-success"><span class="fw-bold">Sinopsis: </span><?php echo $arregloDetalle['sinopsis']; ?></p>
                <img src="../../archivos/<?php echo $arregloDetalle['imagen'] ?>" alt="Imagen de la pelicula" class="img-fluid rounded mx-auto d-block">
                
            </div>
        </div>
    </div>



    <?php
    include_once '../../estructura/pie.php';
    ?>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>


</body>

</html>
-->