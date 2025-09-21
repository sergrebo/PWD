<?php
session_start();
unset($_SESSION['patente']);
unset($_SESSION['nroDni']);

include_once '../../../configuracion.php';

$datos = darDatosSubmitted();
$nuevoDuenio = $datos['nroDni'];
$objAbmAuto = new AbmAuto();
$arregloAuto = $objAbmAuto->arreglar($datos);
$arregloAuto = $arregloAuto[0];
$arregloAuto['dniDuenio'] = $nuevoDuenio;
$respuesta = $objAbmAuto->modificacion($arregloAuto);

if (!$respuesta) {
  $mensaje = "ERROR - No se pudo modificar el registro.";
} else {
  $mensaje = "Modificación exitosa.";
}

include_once '../../estructura/cabecera-retorno.php';
?>
<main class="container mt-4">
  <h4 class="text-center"> <?php echo $mensaje ?></h4>
</main>
<?php include_once '../../estructura/pie.php';