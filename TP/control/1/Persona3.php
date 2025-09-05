<?php

class Persona{

    public function saludo($datos){
        
        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $edad = $datos["edad"];
        $direccion = $datos["direccion"];

        $saludo = "Hola, yo soy " . $nombre . " " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion . ".";

        return $saludo;
        }
}