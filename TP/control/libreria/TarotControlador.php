<?php

class TarotControlador {
  public function listarCartas() {
    $modelo = new Tarot();
    return $modelo->obtenerTodasLasCartas();
  }
}