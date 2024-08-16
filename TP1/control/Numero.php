<?php
class Numero {
  public function darSigno($numero){
    $respuesta = "Error";             //La ausencia de valor es interpretada como negativo por el interprete de php?
    if ($numero === 0) {
      $respuesta = 'cero';
    } elseif ($numero > 0) {
      $respuesta = 'positivo';
    } else {
      $respuesta = 'negativo';
    }
    return $respuesta;
  }
}
?>