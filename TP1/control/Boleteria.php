<?php
class Boleteria{
  public function calcularBoleto($arreglo){
    if ($arreglo['edad'] == 'si' ) {
      $precio = 160;
    } elseif ($arreglo['edad'] == 'no' && $arreglo['estudiante'] == 'si') {
      $precio = 180;
    } else {
      $precio = 300;
    }
    return $precio;
  }
}
?>