<?php

class Persona{

  public function saludo($datos){
      
    $deportes = [];

    $nombre = $datos["nombre"];
    $apellido = $datos["apellido"];
    $edad = $datos["edad"];
    $direccion = $datos["direccion"];
    $genero = $datos["genero"];
    $estudios = $datos["opcion"];
    $deportes = isset($datos["deporte"]) ? $datos["deporte"] : [];

    $cantDeportes = count($deportes);

    if($edad >= 18){
      $saludo = "Hola, yo soy " . $nombre . " " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion .  ".";

      if ($estudios == "no") {
        $saludo = $saludo . " No tengo estudios. Mi sexo es " . $genero . ". Practico " . $cantDeportes . " deportes.";
      } else {
        $saludo = $saludo . " Mi nivel de estudios es " . $estudios . ". Mi sexo es " . $genero . ". Practico " . $cantDeportes . " deportes.";
      }

    }elseif($edad < 18 && $edad > 0){
      $saludo = "Hola, yo soy " . $nombre . " , " . $apellido . " y soy menor de edad.";

    }else{
      $saludo = "ERROR: es imposible tener edad negativa.";

    }
      
  return $saludo;
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