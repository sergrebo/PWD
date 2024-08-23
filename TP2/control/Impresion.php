<?php
class Impresion
{
  public function imprimir($arreglo)
  {
    $valores = [];
    $resultado = "";
    foreach ($arreglo as $clave => $valor) {
      //$resultado = $resultado . $clave . ': '. $valor . "\n";
      array_push($valores, $valor);
    }
    $titulos = ['Título', 'Actores', 'Director', 'Guión', 'Producción', 'Año', 'Nacionalidad', 'Género', 'Duración', 'Restricciones de edad'];
    for ($i = 0; $i < 10; $i++) {
      $resultado = $resultado . '<strong>' . $titulos[$i] . '</strong>' . ': ' . $valores[$i] . '<br>';
    }
    return $resultado;
  }
}
