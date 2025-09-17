<?php
include_once '../configuracion.php';
//include_once '../modelo/4/conector/BaseDatos.php';

$objBaseDatos = new BaseDatos();
echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";
//////////////////////////////
///    PROBANDO INSERTAR   ///
//////////////////////////////

$sql = "INSERT INTO persona(NroDni, Apellido, Nombre, FechaNac, Telefono, Domicilio) VALUES('11111111', 'Dato', 'Prueba', '1111-11-11', '1010011', 'Calle de prueba 111');";
$respuesta = $objBaseDatos->Ejecutar($sql);

if ($respuesta) {
  echo "<br> El registro se inserto exitosamente.";
  if ($respuesta > 0) {
    echo "<br> El id del campo autoincrement insertado es: " . $respuesta . ".";
    //Jamás debería ingresar en este if pues persona no tiene id
    $id = $respuesta;
  } else {
    echo "<br> La tabla <strong>persona</strong> no tiene un campo autoincrement.";
  }
} else {
    echo "<br> No fue posible realizar la operación.";
}
echo "<br>----------------------------------------------------------------------------------<br>";

$sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) VALUES('TES 000', 'Fiat Prueba', 00, '11111111')";
$respuesta = $objBaseDatos->Ejecutar($sql);
if ($respuesta) {
  echo "<br> El registro se inserto exitosamente.";
  if ($respuesta > 0) {
      echo "<br> El id del campo autoincrement insertado es: " . $respuesta . ".";
      //De nuevo, jamás deberia ingresar a este if pues auto no tiene id
      $id = $respuesta;
    } else {
      echo "<br> La tabla <strong>auto</strong> no tiene un campo autoincrement.";
    }
  } else {
    echo "No fue posible realizar la operación.";
  }
echo "<br>----------------------------------------------------------------------------------<br>";

////////////////////////////////
///    PROBANDO ACTUALIZAR   ///
////////////////////////////////
$sql = "UPDATE persona SET Domicilio = 'campo modificado' WHERE NroDni = '11111111'";
$respuesta = $objBaseDatos->Ejecutar($sql);
if ($respuesta > -1) {
  if ($respuesta > 0) {
    echo "<br> La cantidad de regristros afectados por la operacion actualizar fueron: " . $respuesta;
  } else {
    echo "<br> No han sido afectados registros en la actualización.";
  }
} else {
  echo "<br> No fue posible realizar la operación.";
}
echo "<br>----------------------------------------------------------------------------------<br>";

//////////////////////////////
///    PROBANDO ELIMINAR   ///
//////////////////////////////
$sql = "DELETE FROM auto WHERE patente = 'TES 000'";
$respuesta = $objBaseDatos->Ejecutar($sql);
if($respuesta > -1){
  if($respuesta > 0) {
    echo "<br> La cantidad de registros afectados por la eliminación fueron: " . $respuesta;
  } else {
    echo "<br> No han sido afectados registros en la actualización.";
  }
} else {
    echo "<br> No fue posible realizar la operación.";
}
echo "<br>----------------------------------------------------------------------------------<br>";

$sql = "DELETE FROM persona WHERE NroDni = '11111111'";
$respuesta = $objBaseDatos->Ejecutar($sql);
if($respuesta > -1){
  if($respuesta > 0) {
    echo "<br> La cantidad de registros afectados por la eliminación fueron: " . $respuesta;
  } else {
    echo "<br> No han sido afectados registros en la actualización.";
  }
} else {
    echo "<br> No fue posible realizar la operación.";
}
echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";

////////////////////////////
///    PROBANDO Select   ///
////////////////////////////
$sql = "SELECT * FROM persona";
$respuesta = $objBaseDatos->Ejecutar($sql);
if($respuesta > -1) {
  if($respuesta > 0) {
    echo "<br> La cantidad de registros encontrados por la operación fueron: " . $respuesta;
    while ($registro = $objBaseDatos->Registro()){
      verEstructura($registro);
      /*
      echo "<pre>";
      print_r($registro);
      echo "</pre>";
      */
    }
  }else{
    echo "<br> No han encontrado registros.";
  }
} else {
  echo "<br> No fue posible realizar la operación.";
}
echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";



?>