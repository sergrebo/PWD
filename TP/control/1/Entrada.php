<?php

class Entrada{

    public function ValorEntrada($datos){
        
        
        $edad = $datos["edad"];
        $estudios = $datos["estudiante"];


        if($this->validarEnteroPositivo($edad)){
            if($estudios == "SI" || $edad < 12 ){
                $valorEntrada = $edad < 12 ? 160 : 180;
            }
            else{
                $valorEntrada = 300;
            }
           
        }else{
            $valorEntrada = "Valores incorrectos.";
        }
        

        return $valorEntrada;
    }



    public function validarEnteroPositivo($numero) {
        
        if (is_numeric($numero) && $numero > 0 && ctype_digit($numero)) {
            return true;
        } else {
            return false;
        }

}

}




