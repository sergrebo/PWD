<?php
class Saludo
{
  public function saludar($arreglo)
  {
    $nombre = $this->validarCadena($arreglo['nombre']);
    $apellido = $this->validarCadena($arreglo['apellido']);
    $edad = $this->validarEdad($arreglo['edad']);
    if ($nombre && $apellido && $edad) {
      if ($arreglo['edad'] >= 18) {
        $mensaje = $this->saludarAdulto($arreglo);
      } else {
        $mensaje = $this->saludarMenor($arreglo);
      }
    } else {
      $mensaje = "Error en el ingreso de datos";
    }
    return $mensaje;
  }

  public function saludarAdulto($arreglo){
    $mensaje = "Hola, yo soy " . $arreglo['nombre'] . ' ' . $arreglo['apellido'] . " tengo " . $arreglo['edad'] . " años y vivo en " . $arreglo['direccion'];
    return $mensaje;
  }
  public function saludarMenor($arreglo){
    $mensaje = "Hola, yo soy " . $arreglo['nombre'] . " tengo " . $arreglo['edad'] . " años.";
    return $mensaje;
  }

  public function validarCadena($cadena)
  {
    $respuesta = true;
    while (empty($cadena) || !preg_match('/^[a-zA-Z ]+$/', $cadena)) {
      $respuesta = false;
    }
    return $respuesta;
  }

  public function validarEdad($edad){
    $respuesta = true;
    if (!$this->validarEnteroPositivo($edad) || $edad > 123) {
      $respuesta = false;
    }
    return $respuesta;
  }

  public function validarEnteroPositivo($numero){
    $respuesta = true;
    while($numero <= 0 || !ctype_digit($numero)){
      $respuesta = false;
    }
  return $respuesta;
  }
}
