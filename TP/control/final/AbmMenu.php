<?php namespace TPfinal\Controladores;

use TPfinal\Modelos\Menu;

class AbmMenu
{
    /**
     * Crea un nuevo registro en la tabla menu a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function alta($param)
    {
        $respuesta = false;
        if (isset($param['menombre']) && isset($param['medescripcion'])) {
            $nuevo = Menu::create([
                'menombre' => $param['menombre'],
                'medescripcion' => $param['medescripcion'],
                'idpadre' => isset($param['idpadre']) ? $param['idpadre'] : null,
                'medeshabilitado' => isset($param['medeshabilitado']) ? $param['medeshabilitado'] : null
            ]);
            if (!empty($nuevo)) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Elimina un registro en la tabla menu a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function baja($param)
    {
        $respuesta = false;
        if (isset($param['idmenu'])) {
            $obj = Menu::find($param['idmenu']);
            if ($obj) {
                $obj->delete();
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Modifica un registro de la tabla menu a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function modificacion($param)
    {
        $respuesta = false;
        if (isset($param['idmenu'])) {
            $obj = Menu::find($param['idmenu']);
            if ($obj) {
                $obj->update([
                    'menombre' => $param['menombre'],
                    'medescripcion' => $param['medescripcion'],
                    'idpadre' => isset($param['idpadre']) ? $param['idpadre'] : null,
                    'medeshabilitado' => isset($param['medeshabilitado']) ? $param['medeshabilitado'] : null
                ]);
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Busca menus según los parámetros proporcionados
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $query = Menu::query();

        if (isset($param['idmenu']) && !empty($param['idmenu'])) {
            $query->where('idmenu', $param['idmenu']);
        }

        if (isset($param['menombre']) && !empty($param['menombre'])) {
            $query->where('menombre', $param['menombre']);
        }

        if (isset($param['medescripcion']) && !empty($param['medescripcion'])) {
            $query->where('medescripcion', $param['medescripcion']);
        }

        if (isset($param['idpadre']) && !empty($param['idpadre'])) {
            $query->where('idpadre', $param['idpadre']);
        }

        if (isset($param['medeshabilitado']) && !empty($param['medeshabilitado'])) {
            $query->where('medeshabilitado', $param['medeshabilitado']);
        }

        $resultados = $query->get();

        return $resultados;
    }
}
