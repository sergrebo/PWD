<?php

class ControlPelicula {

    public function mostrarDetallePelicula($datos) {
        
        $clavesEsperadas = [
            'titulo' => '',
            'actores' => '',
            'director' => '',
            'guion' => '',
            'produccion' => '',
            'anio' => '',
            'nacionalidad' => '',
            'genero' => '',
            'duracion' => '',
            'restricciones' => '',
            'sinopsis' => ''
        ];

        $arregloDetalle = [];

        foreach ($clavesEsperadas as $clave => $valorPorDefecto) {
            $arregloDetalle[$clave] = isset($datos[$clave]) ? $datos[$clave] : $valorPorDefecto;
        }

        return $arregloDetalle;
    }


}


?>