<?php

class ControlPelicula {

    private function subirImagen($datos) {
            $dir = '../../../vista/archivos';
            $estadoImagen = "";
            $tipoPermitido = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        
            // Verificar si se subió un archivo
            if ($datos['image']['error'] > 0) {
                $estadoImagen = -2; // Error: No se pudo acceder al archivo temporal.
            }
            // Verificar tipo de archivo
            elseif (!in_array($datos['image']['type'], $tipoPermitido)) {
                $estadoImagen = -1; // Error: Tipo de archivo no permitido.
            }
            // Intentar copiar el archivo al directorio especificado
            elseif (!copy($datos['image']['tmp_name'], $dir . "/" . $datos['image']['name'])) {
                $estadoImagen = 0; // Error: No se pudo copiar el archivo al directorio de destino.
            } 
            else {
                $estadoImagen = 1; // Éxito: El archivo se ha copiado correctamente.
            }
        
            return ['estado' => $estadoImagen, 'nombreArchivo' => $datos['image']['name']];
        }

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
            'sinopsis' => '',
            'imagen' => '',
        ];

        $arregloDetalle = [];

        foreach ($clavesEsperadas as $clave => $valorPorDefecto) {
            //echo $clave;
            if ($clave == 'imagen' && isset($datos['image'])) {
                //var_dump($datos['image']);
                $resultadoImagen = $this->subirImagen($datos);
                //var_dump($resultadoImagen);
                if ($resultadoImagen['estado'] == 1) {
                    $arregloDetalle['imagen'] = $resultadoImagen['nombreArchivo'];
                } else {
                    $arregloDetalle['imagen'] = ''; 
                }
            } else {
            $arregloDetalle[$clave] = isset($datos[$clave]) ? $datos[$clave] : $valorPorDefecto;
            }
        }
        return $arregloDetalle;
    }


}


?>