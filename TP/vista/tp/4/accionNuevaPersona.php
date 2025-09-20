<?php
include_once '../../../configuracion.php';

//Recuperación de los datos del formulario
$datos = darDatosSubmitted();

//$_GET me indica de donde procede la información. Lo utilizo para definir luego la redirección.
$origen = isset($_GET['origen']) ? $_GET['origen'] : 'default';

//Definición de URL de redireccionamiento
$urlNuevaPersona = '../4';
$urlPersonaNoEncontrada = './elegirPersona.php';
if ($origen == 'personaNoEncontrada') {
  $urlDestino = $urlPersonaNoEncontrada;
} else {
  $urlDestino = $urlNuevaPersona;
}

//Creo objeto AbmPersona para acceder a las funciones controladoras
$objAbmPersona = new AbmPersona();

//Hago una busqueda en la base de datos con los datos recibidos vía formulario. Si existe registro con la clave repetida, no sera posible cargarlo
$arregloRespuesta = $objAbmPersona->buscar($datos);

//Emito el resultado de la ejecución del algoritmo
if (!empty($arregloRespuesta)) {
  $mensaje = "<h4 class='text-center text-danger'>ERROR - Ya existe ese registro en la base de datos.</h4>";
} else {
  //Ordeno la creación del nuevo registro en la tabla persona
  $respuesta = $objAbmPersona->alta($datos);
  if (!$respuesta) {
    $mensaje = "<h4 class='text-center text-danger'>ERROR - No se pudo cargar el registro persona.</h4>";
  } else {
    $mensaje = "<h4 class='text-center text-success'>Carga de registro persona exitoso.</h4><p>Serás redireccionado en 5 segundos...</p>";
    header("refresh:5; url=". $urlDestino);
  }
}

include_once '../../estructura/cabecera-retorno.php';

echo "<main class='container mt-4'>";
echo $mensaje;
echo "</main>";

include_once '../../estructura/pie.php';
?>