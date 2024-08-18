<?php
class Deportes {
  public function contarDeportes($arreglo){
    $deportes = [
      'futbol',
      'basket',
      'tenis',
      'voley'
    ];
    print_r($deportes);
    $practicados = array_intersect($deportes, $arreglo);
    print_r($practicados);
    $cantPracticados = count($practicados);
    echo $cantPracticados;
    if ($cantPracticados === 0) {
      $mensaje = 'No practico ningun deporte.';
    } else {
      $mensaje = 'Practico ' . $cantPracticados . ' deportes.';
    }
    
    return $mensaje;
  }
}
