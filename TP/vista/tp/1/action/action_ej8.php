<?php

include_once "../../../../control/1/Entrada.php";
include_once '../../../../utils/funciones.php';


    $datos = darDatosSubmitted();
    $obj = new Entrada();
    $valorEntrada = $obj->ValorEntrada($datos);

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor de la Entrada</title>
</head>
<body> -->
<?php
    include_once '../../../estructura/cabecera-retorno.php';
?>
    <div>
        <h3>Resultado</h3>
        <p><?php echo "El precio de tu entrada es de $ " . $valorEntrada; ?></p>
        <a href="../ejercicio8.php">Volver</a>
    </div> 
<!-- </body>
</html>  -->
<?php
    include_once '../../../estructura/pie.php';
?>