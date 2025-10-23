<?php
require_once '../../../vendor/autoload.php';

class Tarot {
  private $client;
  private $apiBase = 'https://tarot-api-es.vercel.app/api/v1/';

  public function __construct()
  {
    $this->client = new \GuzzleHttp\Client([
      'base_uri' => $this->apiBase,
    ]);
  }

  /**
   * Obtiene todas las cartas de Tarot
   */
  public function obtenerTodasLasCartas() {
    $resultado = [];
    
    try {
      $response = $this->client->request('GET', 'cards');
      $data = json_decode($response->getBody()->getContents(), true);
      $resultado = [
        'success' => true,
        'data' => $data['cards'],
        'count' => count($data['cards'])
      ];
    } catch (\Exception $e) {
      $resultado = [
        'success' => false,
        'error' => 'Error al obtener las cartas',
        'message' => $e->getMessage()
      ];
    }
    
    return $resultado;
  }
}

?>