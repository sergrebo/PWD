<?php 
class Impresion{
  public function imprimir($arreglo){
    $resultado = [];
    foreach ($arreglo as $clave => $valor) {
      //$resultado = $resultado . $clave . ': '. $valor . "\n";
      array_push($resultado, $valor);
    }
print_r($resultado);
$titulos = ['Título: ', 'Actores: ', ]; 
    return $resultado;
  }
}
?>