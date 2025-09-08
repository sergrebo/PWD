<?php
  include_once '../../../utils/funciones.php';
  include_once '../../../control/2/verificacion.php';

  $datos = darDatosSubmitted();
  $obj = new verificacion();
  $mensaje = $obj->verificaPass($datos);
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
-->
<?php
  include_once '../../estructura/cabecera-retorno.php';
?>
  <div class="container mt-5">
    <?php echo $mensaje . "<br>" ?>

    <a href="./ejercicio3.php">Volver</a>
  </div>


<?php
  include_once '../../estructura/pie.php';
?>

    <!--
</body>

</html>