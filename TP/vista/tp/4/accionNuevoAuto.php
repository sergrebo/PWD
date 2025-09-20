<?php
include_once '../../../configuracion.php';

//Recuperación de los datos del formulario
$datos = darDatosSubmitted();

//Creo objeto AbmAuto para acceder a las funciones controladoras
$objAbmAuto = new AbmAuto();

//Hago una busqueda en la base de datos con los datos recibidos vía formulario. Si existe registro con la clave repetida, no sera posible cargarlo
$arregloRespuesta = $objAbmAuto->buscar($datos);

//Emito el resultado de la ejecución del algoritmo
if (!empty($arregloRespuesta)) {
  $mensaje = "<h4 class='text-center text-danger'>ERROR - Ya existe ese registro en la base de datos.</h4>";
} else {
  //Ordeno la creación del nuevo registro en la tabla auto
  $respuesta = $objAbmAuto->alta($datos);
  if (!$respuesta) {
    $mensaje = "<h4 class='text-center text-danger'>ERROR - No se pudo cargar el registro auto.</h4>";
  } else {
    $mensaje = "<h4 class='text-center text-success'>Carga de registro auto exitoso.</h4><p>Serás redireccionado en 5 segundos...</p>";
    header("refresh:5; url='../4'");
  }
}

include_once '../../estructura/cabecera-retorno.php';

echo "<main class='container mt-4'>";
echo $mensaje;
echo "</main>";

include_once '../../estructura/pie.php';
?>