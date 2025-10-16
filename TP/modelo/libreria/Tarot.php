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


}

?>