<?php

include_once "../../../../../control/1/Persona6.php";
include_once "../../../../../utils/funciones.php";


    $datos = darDatosSubmitted();
    $obj = new Persona();
    $saludo = $obj-> saludo($datos);
    //print_r($datos);

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body> -->
<?php
    include_once '../../../../estructura/cabecera-retorno.php';
?>
    <div class="container mt-4">
        <h1>Saludo</h1>
        <p><?php echo $saludo; ?></p>
    </div> 
<!-- </body>
</html>  -->
<?php
    include_once '../../../../estructura/pie.php';
?>