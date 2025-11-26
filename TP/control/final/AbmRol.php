<?php namespace TPfinal\Controladores;

use TPfinal\Modelos\Rol;

class AbmRol
{
    /**
     * Crea un nuevo registro en la tabla rol a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function alta($param)
    {
        $respuesta = false;
        if (isset($param['rodescripcion'])) {
            $nuevo = Rol::create([
                'rodescripcion' => $param['rodescripcion']
            ]);
            if (!empty($nuevo)) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Elimina un registro en la tabla rol a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function baja($param)
    {
        $respuesta = false;
        if (isset($param['idrol'])) {
            $obj = Rol::find($param['idrol']);
            if ($obj) {
                $obj->delete();
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Modifica un registro de la tabla rol a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function modificacion($param)
    {
        $respuesta = false;
        if (isset($param['idrol'])) {
            $obj = Rol::find($param['idrol']);
            if ($obj) {
                $obj->update([
                    'rodescripcion' => $param['rodescripcion']
                ]);
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Busca roles según los parámetros proporcionados
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $query = Rol::query();

        if (isset($param['idrol']) && !empty($param['idrol'])) {
            $query->where('idrol', $param['idrol']);
        }

        if (isset($param['rodescripcion']) && !empty($param['rodescripcion'])) {
            $query->where('rodescripcion', $param['rodescripcion']);
        }

        $resultados = $query->get();

        return $resultados;
    }
}
