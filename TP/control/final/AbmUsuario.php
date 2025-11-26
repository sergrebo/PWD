<?php namespace TPfinal\Controladores;

use TPfinal\Modelos\Usuario;

class AbmUsuario
{
    /**
     * Crea un nuevo registro en la tabla usuarios a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function alta($param)
    {
        $respuesta = false;
        if ((isset($param['usnombre']) || !empty(trim($param['usnombre']))) && (isset($param['uspass']) || !empty(trim($param['uspass']))) && (isset($param['usmail']) || !empty(trim($param['usmail'])))) {
            $nuevoUsuario = Usuario::create([
                'usnombre' => $param['usnombre'],
                'uspass' => $param['uspass'],
                'usmail' => $param['usmail']
            ]);
            if (!empty($nuevoUsuario)) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Elimina un registro en la tabla usuarios a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function baja($param)
    {
        $respuesta = false;
        if (isset($param['idusuario'])) {
            $obj = Usuario::find($param['idusuario']);
            if ($obj) {
                $obj->delete();
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Modifica un registro de la tabla usuarios a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function modificacion($param)
    {
        $respuesta = false;
        if (isset($param['idusuario'])) {
            $obj = Usuario::find($param['idusuario']);
            if ($obj) {
                $obj->update([
                    'usnombre' => $param['usnombre'],
                    'uspass' => $param['uspass'],
                    'usmail' => $param['usmail'],
                    'usdeshabilitado' => isset($param['usdeshabilitado']) ? $param['usdeshabilitado'] : null
                ]);
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Busca usuarios según los parámetros proporcionados
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $query = Usuario::query();

        // Buscar por ID
        if (isset($param['idusuario']) && !empty($param['idusuario'])) {
            $query->where('idusuario', $param['idusuario']);
        }

        // Buscar por nombre de usuario
        if (isset($param['usnombre']) && !empty($param['usnombre'])) {
            $query->where('usnombre', $param['usnombre']);
        }

        // Buscar por correo electronico
        if (isset($param['usmail']) && !empty($param['usmail'])) {
            $query->where('usmail', $param['usmail']);
        }

        // Buscar por fecha de deshabilitado
        if (isset($param['usdeshabilitado']) && !empty($param['usdeshabilitado'])) {
            $query->where('usdeshabilitado', $param['usdeshabilitado']);
        }

        $usuarios = $query->get();

        return $usuarios;
    }
}
