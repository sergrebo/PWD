<?php
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Tarot {
  private $client;
  private $baseUri = 'https://tarot-api-es.vercel.app/api/v1';

  public function __construct()
  {
    $this->client = new Client([
      'base_uri' => $this->baseUri,
      'timeout' => 10.0,
    ]);
  }

  /**
   * Obtiene todas las cartas de Tarot
   */
  public function obtenerTodasLasCartas() {
    $resultado = [];
    
    try {
      $response = $this->client->get('/cards');
      $data = json_decode($response->getBody(), true);
      $resultado = [
        'success' => true,
        'data' => $data['cards'],
        'count' => count($data['cards'])
      ];
    } catch (RequestException $e) {
      $resultado = [
        'success' => false,
        'error' => 'Error al obtener las cartas',
        'message' => $e->getMessage()
      ];
    }
    
    return $resultado;
  }
  
  /**
   * Obtiene una carta aleatoria
   */
  public function obtenerCartaAleatoria() {
    $resultado = [];
    
    try {
      $response = $this->client->get('/cards/random');
      $data = json_decode($response->getBody(), true);
      $resultado = [
        'success' => true,
        'data' => $data['cards'][0]
      ];
    } catch (RequestException $e) {
      $resultado = [
        'success' => false,
        'error' => 'El tarot no responde',
        'message' => $e->getMessage()
      ];
    }
    
    return $resultado;
  }
  
  /**
   * Obtiene 3 cartas aleatorias para una lectura clasica
   */
  public function lecturaTresCartas() {
    $lectura = [];
    $errores = [];
    
    for ($i = 0; $i < 3; $i++) {
      $cartaResult = $this->obtenerCartaAleatoria();
      
      if ($cartaResult['success']) {
        $lectura[] = $cartaResult['data'];
      } else {
        $errores[] = $cartaResult['error'];
      }
    }
    
    return [
      'success' => empty($errores),
      'cartas' => $lectura,
      'errores' => $errores,
      'total_obtenido' => count($lectura)
    ];
  }

}

?>