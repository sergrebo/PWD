<?php
include_once '../configuracion.php';

$obj = new Persona();
$obj->setear('11111111', 'Test', 'Prueba', '1111-11-11', '1001000', 'Calle falsa 123');

if ($obj->insertar()) {
  echo "<br> El registro se insertó exitosamente.";
  verEstructura($obj);
} else {
  echo "<br>" . $obj->getMensajeOperacion();
}

$obj->setDomicilio("Calle de prueba 111");

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