<?php

include_once "../../../control/1/Calculadora.php";
include_once '../../../utils/funciones.php';

    $datos = darDatosSubmitted();
    $obj = new Calculadora();
    $resultado = $obj->Operaciones($datos);

    include_once '../../estructura/cabecera-retorno.php' ?>
    
    <div class="container mt-4">
        <h1>Resultado</h1>
        <p><?php echo $resultado; ?></p>
        <a href="../ejercicio7.php">Volver a la Calculadora</a>
    </div> 

<?php include_once '../../estructura/pie.php' ?>