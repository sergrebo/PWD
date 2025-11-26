<?php namespace TPfinal\Controladores;

use TPfinal\Modelos\Compraestado;

class AbmCompraestado
{
    /**
     * Crea un nuevo registro en la tabla compraestado a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function alta($param)
    {
        $respuesta = false;
        if (isset($param['idcompra']) && isset($param['idcompraestadotipo']) && isset($param['cefechaini'])) {
            $nuevo = Compraestado::create([
                'idcompra' => $param['idcompra'],
                'idcompraestadotipo' => $param['idcompraestadotipo'],
                'cefechaini' => $param['cefechaini'],
                'cefechafin' => isset($param['cefechafin']) ? $param['cefechafin'] : null
            ]);
            if (!empty($nuevo)) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Elimina un registro en la tabla compraestado a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function baja($param)
    {
        $respuesta = false;
        if (isset($param['idcompraestado'])) {
            $obj = Compraestado::find($param['idcompraestado']);
            if ($obj) {
                $obj->delete();
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Modifica un registro de la tabla compraestado a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function modificacion($param)
    {
        $respuesta = false;
        if (isset($param['idcompraestado'])) {
            $obj = Compraestado::find($param['idcompraestado']);
            if ($obj) {
                $obj->update([
                    'idcompra' => $param['idcompra'],
                    'idcompraestadotipo' => $param['idcompraestadotipo'],
                    'cefechaini' => $param['cefechaini'],
                    'cefechafin' => isset($param['cefechafin']) ? $param['cefechafin'] : null
                ]);
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Busca compraestados según los parámetros proporcionados
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $query = Compraestado::query();

        if (isset($param['idcompraestado']) && !empty($param['idcompraestado'])) {
            $query->where('idcompraestado', $param['idcompraestado']);
        }

        if (isset($param['idcompra']) && !empty($param['idcompra'])) {
            $query->where('idcompra', $param['idcompra']);
        }

        if (isset($param['idcompraestadotipo']) && !empty($param['idcompraestadotipo'])) {
            $query->where('idcompraestadotipo', $param['idcompraestadotipo']);
        }

        if (isset($param['cefechaini']) && !empty($param['cefechaini'])) {
            $query->where('cefechaini', $param['cefechaini']);
        }

        if (isset($param['cefechafin']) && !empty($param['cefechafin'])) {
            $query->where('cefechafin', $param['cefechafin']);
        }

        $resultados = $query->get();

        return $resultados;
    }
}
