<?php

class Persona{

    public function saludo($datos){
        
        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $edad = $datos["edad"];
        $direccion = $datos["direccion"];

        if($edad >= 18){
            $saludo = "Hola, yo soy " . $nombre . " " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion;
        }elseif($edad < 18 && $edad >= 0){
            $saludo = "Hola, yo soy " . $nombre . " " . $apellido . " y soy menor de edad.";
        }else{
            $saludo = "ERROR: es imposible tener edad negativa.";
        }

        

        return $saludo;
        }


}