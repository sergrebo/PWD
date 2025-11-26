<?php namespace TPfinal\Controladores;

use TPfinal\Modelos\Compraitem;

class AbmCompraitem
{
    /**
     * Crea un nuevo registro en la tabla compraitem a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function alta($param)
    {
        $respuesta = false;
        if (isset($param['idproducto']) && isset($param['idcompra']) && isset($param['cicantidad'])) {
            $nuevo = Compraitem::create([
                'idproducto' => $param['idproducto'],
                'idcompra' => $param['idcompra'],
                'cicantidad' => $param['cicantidad']
            ]);
            if (!empty($nuevo)) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Elimina un registro en la tabla compraitem a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function baja($param)
    {
        $respuesta = false;
        if (isset($param['idcompraitem'])) {
            $obj = Compraitem::find($param['idcompraitem']);
            if ($obj) {
                $obj->delete();
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Modifica un registro de la tabla compraitem a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function modificacion($param)
    {
        $respuesta = false;
        if (isset($param['idcompraitem'])) {
            $obj = Compraitem::find($param['idcompraitem']);
            if ($obj) {
                $obj->update([
                    'idproducto' => $param['idproducto'],
                    'idcompra' => $param['idcompra'],
                    'cicantidad' => $param['cicantidad']
                ]);
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Busca compraitems según los parámetros proporcionados
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $query = Compraitem::query();

        if (isset($param['idcompraitem']) && !empty($param['idcompraitem'])) {
            $query->where('idcompraitem', $param['idcompraitem']);
        }

        if (isset($param['idproducto']) && !empty($param['idproducto'])) {
            $query->where('idproducto', $param['idproducto']);
        }

        if (isset($param['idcompra']) && !empty($param['idcompra'])) {
            $query->where('idcompra', $param['idcompra']);
        }

        if (isset($param['cicantidad']) && !empty($param['cicantidad'])) {
            $query->where('cicantidad', $param['cicantidad']);
        }

        $resultados = $query->get();

        return $resultados;
    }
}
