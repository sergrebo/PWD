<?php
include_once '../configuracion.php';

$obj = new Auto();
$obj->setear('TES 000', 'Fiat Test', 00, '22985265');

if ($obj->insertar()) {
  echo "<br> El registro se insertó exitosamente.";
  verEstructura($obj);
} else {
  echo "<br>" . $obj->getMensajeOperacion();
}

$obj->setMarca("Ford Prueba");

if ($obj->modificar()) {
  echo "<br> El registro se actualizó exitosamente.";
  verEstructura($obj);
} else {
  echo "<br>" . $obj->getMensajeOperacion();
}

if ($obj->eliminar()) {
  echo "<br> El registro se eliminó exitosamente";
  } else {
    echo "<br>" . $obj->getMensajeOperacion();
  }
?>