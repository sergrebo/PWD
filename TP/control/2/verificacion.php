<?php 


class Verificacion{

    public function verificaPass($datos){
        $usuarios = [
            [
                "usuario" => "usuario1",
                "clave" => "clave123"
            ],
            [
                "usuario" => "usuario2",
                "clave" => "clave456"
            ],
            [
                "usuario" => "usuario3",
                "clave" => "clave789"
            ],
            [
                "usuario" => "usuario4",
                "clave" => "claveabc"
            ],
            [
                "usuario" => "usuario5",
                "clave" => "clavexyz"
            ]
        ];

        $usuarioIngresado = $datos['usuario'];
        $claveIngresada = $datos['clave'];

        $encontrado = false;

        foreach($usuarios as $usuario){
            if($usuario['usuario'] == $usuarioIngresado && $usuario['clave'] == $claveIngresada){
                $encontrado = true;
                break;
            }
        }

        if($encontrado){
            $mensaje =  "Login exitoso. Bienvenido, " . $usuarioIngresado;
        }else{
            $mensaje = "Usuario o clave incorrectos."; 
        }

        return $mensaje;
    }
}
