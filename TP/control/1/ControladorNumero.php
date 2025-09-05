<?php

class ControladorNumero{

    public function signoNumero($numero){

        $mensaje = "incorrecto";

        if($numero == 0){
            $mensaje = "cero";
        }elseif($numero > 0){
            $mensaje = "positivo";
        }elseif($numero < 0){
            $mensaje = "negativo";
        }
        return $mensaje;
    }
}

//SI entra vacio me lo toma como negativo WHY????





