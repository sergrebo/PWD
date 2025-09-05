<?php

class Calculadora{

    public function Operaciones($datos){


      $operacion = $datos["Operacion"];
      $numero1 = $datos["numero1"];
      $numero2 = $datos["numero2"];

      if(is_numeric($numero1) && is_numeric($numero2)){
          if($operacion == "SUMA"){
            $resultado = $numero1 + $numero2;
            $cadena = "Se selecciono: " . $operacion . "<br>" . $numero1 . " + " . $numero2 . " = " . $resultado;
          }elseif($operacion == "RESTA"){
            $resultado = $numero1 - $numero2;
            $cadena = "Se selecciono: " . $operacion . "<br>" . $numero1 . " - " . $numero2 . " = " . $resultado;
          }elseif($operacion == "MULTIPLICACION"){
            $resultado = $numero1 * $numero2;
            $cadena = "Se selecciono: " . $operacion . "<br>" . $numero1 . " * " . $numero2 . " = " . $resultado;
          }else{
            if ($numero2 != 0) {
              $resultado = $numero1 / $numero2;
              $cadena = "Se seleccionó: " . $operacion . "<br>" . $numero1 . " / " . $numero2 . " = " . $resultado;
            } else {
              $cadena = "La división por 0 no es posible, revise los valores ingresados y vuelva a intentarlo.";
            }
          }
      }else{
        $cadena = "Valores de entrada incorrectos.";
      }

      return $cadena;
 }
        
  
  
  
  
  
  
  
  
  
  
  
  /**public function validarCadena($cadena)
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
        }*/

}