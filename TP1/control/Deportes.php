<?php
class Deportes {
  public function contarDeportes($arreglo){
    $deportes = [
      'futbol',
      'basket',
      'tenis',
      'voley'
    ];
    $practicados = array_intersect($deportes, $arreglo);
    $cantPracticados = count($practicados);
    if ($cantPracticados === 0) {
      $mensaje = 'No practico ningun deporte.';
    } else {
      $mensaje = 'Practico ' . $cantPracticados . ' deportes.';
    }
    
    return $mensaje;
  }
}
