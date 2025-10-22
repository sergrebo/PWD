<?php
include_once '../../../configuracion.php';

class TarotControlador {
    private $tarot;

    public function __construct() {
        $this->tarot = new Tarot();
    }

    public function obtenerCartas() {
        $resultado = $this->tarot->obtenerTodasLasCartas();
        return $resultado;
    }
}
?>