<?php
include_once '../../../configuracion.php';

class TarotControlador {
    private $tarot;

    public function __construct() {
        $this->tarot = new Tarot();
    }

    /**
     * Obtiene todas las cartas del Tarot
     */
    public function obtenerCartas() {
        $resultado = $this->tarot->obtenerTodasLasCartas();
        return $resultado;
    }

    /**
    * Retorna una carta aleatoria y su interpretación según el tema elegido.
    */
    public function obtenerCartaParaTema($tema) {
        $resultado = $this->tarot->obtenerTodasLasCartas();
        $cartas = $resultado['data'];
        if (empty($cartas)) {
            return [
            'success' => false,
            'error' => 'No se pudieron obtener las cartas del tarot.'
            ];
        }

        // Elegir una carta al azar
        $carta = $cartas[array_rand($cartas)];
        //print_r($carta);    

        // Determinar orientación
        $orientacion = (rand(0, 1) === 0) ? 'al derecho' : 'al reves';

        // Asociar temas API ↔ formulario
        $mapaTemas = [
            'amor' => 'amor',
            'trabajo' => 'trabajo',
            'dinero' => 'finanzas',
            'espiritualidad' => 'espiritualidad',
            'salud' => 'salud'
        ];

        $claveTema = $mapaTemas[$tema] ?? 'general';

        // Buscar el significado según orientación y tema
        if ($orientacion === 'al derecho') {
            $significadoOrientacion = $carta['meaning_up'];
        } else {
            $significadoOrientacion = $carta['meaning_rev'];
        }

        $significadoTema = $carta[$claveTema];

        return [
            'success' => true,
            'carta' => $carta,
            'tema' => $tema,
            'orientacion' => $orientacion,
            'significadoOrientacion' => $significadoOrientacion,
            'significadoTema' => $significadoTema,
        ];
    }
}

?>