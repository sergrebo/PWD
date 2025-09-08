<?php

class Archivo {
    
    private $dir;

    public function __construct()
    {
        $this->dir = "../../../vista/archivos";
    }

    public function getDir()
    {
        return $this->dir;
    }

    public function setDir($dir)
    {
        $this->dir = $dir;
    }


    public function subirArchivo($datos) {
        $estadoArchivo = "";
        $tiposPermitidos = ['text/plain'];
        $tamanoMaximo = 2 * 1024 * 1024; // 2 MB
    
        // Verificar si hay un error en la carga del archivo
        if ($datos['miArchivoTxt']['error'] > 0) {
            $estadoArchivo = -3; // Error: No se pudo acceder al archivo temporal.
        } 
        // Validar tipo de archivo
        elseif (!in_array($datos['miArchivoTxt']['type'], $tiposPermitidos)) {
            $estadoArchivo = -2; // Error: Tipo de archivo no permitido.
        } 
        // Validar tamaño de archivo
        elseif ($datos['miArchivoTxt']['size'] > $tamanoMaximo) {
            $estadoArchivo = -1; // Error: El archivo supera el tamaño máximo permitido.
        } 
        // Copiar archivo al directorio
        else {
            if (!copy($datos['miArchivoTxt']['tmp_name'], $this->getDir() . "/" . $datos['miArchivoTxt']['name'])) {
                $estadoArchivo = 0; // Error general: No se pudo cargar el archivo.
            } else {
                $estadoArchivo = 1; // Éxito: El archivo se ha copiado con éxito.
            }
        }
        return $estadoArchivo;
    }

}

?>