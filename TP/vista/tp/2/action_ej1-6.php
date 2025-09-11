<?php

include_once "../../../control/1/Persona6.php";
include_once "../../../utils/funciones.php";

    $datos = darDatosSubmitted();
    $obj = new Persona();
    $saludo = $obj-> saludo($datos);

    include_once '../../estructura/cabecera-retorno.php' ?>

    <div class="container mt-4">
        <h1>Saludo</h1>
        <p><?php echo $saludo; ?></p>
    </div> 

<?php include_once '../../estructura/pie.php' ?>