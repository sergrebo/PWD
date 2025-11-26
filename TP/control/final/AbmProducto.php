<?php namespace TPfinal\Controladores;

use TPfinal\Modelos\Producto;

class AbmProducto
{
    /**
     * Crea un nuevo registro en la tabla producto a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function alta($param)
    {
        $respuesta = false;
        if (isset($param['pronombre']) && isset($param['prodetalle']) && isset($param['procantstock'])) {
            $nuevo = Producto::create([
                'pronombre' => $param['pronombre'],
                'prodetalle' => $param['prodetalle'],
                'procantstock' => $param['procantstock']
            ]);
            if (!empty($nuevo)) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Elimina un registro en la tabla producto a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function baja($param)
    {
        $respuesta = false;
        if (isset($param['idproducto'])) {
            $obj = Producto::find($param['idproducto']);
            if ($obj) {
                $obj->delete();
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Modifica un registro de la tabla producto a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function modificacion($param)
    {
        $respuesta = false;
        if (isset($param['idproducto'])) {
            $obj = Producto::find($param['idproducto']);
            if ($obj) {
                $obj->update([
                    'pronombre' => $param['pronombre'],
                    'prodetalle' => $param['prodetalle'],
                    'procantstock' => $param['procantstock']
                ]);
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Busca productos según los parámetros proporcionados
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $query = Producto::query();

        if (isset($param['idproducto']) && !empty($param['idproducto'])) {
            $query->where('idproducto', $param['idproducto']);
        }

        if (isset($param['pronombre']) && !empty($param['pronombre'])) {
            $query->where('pronombre', $param['pronombre']);
        }

        if (isset($param['prodetalle']) && !empty($param['prodetalle'])) {
            $query->where('prodetalle', $param['prodetalle']);
        }

        if (isset($param['procantstock']) && !empty($param['procantstock'])) {
            $query->where('procantstock', $param['procantstock']);
        }

        $resultados = $query->get();

        return $resultados;
    }
}
