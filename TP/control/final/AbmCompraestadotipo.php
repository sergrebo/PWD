<?php namespace TPfinal\Controladores;

use TPfinal\Modelos\Compraestadotipo;

class AbmCompraestadotipo
{
    /**
     * Crea un nuevo registro en la tabla compraestadotipo a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function alta($param)
    {
        $respuesta = false;
        if (isset($param['cestdescripcion']) && isset($param['cetdetalle'])) {
            $nuevo = Compraestadotipo::create([
                'cestdescripcion' => $param['cestdescripcion'],
                'cetdetalle' => $param['cetdetalle']
            ]);
            if (!empty($nuevo)) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Elimina un registro en la tabla compraestadotipo a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function baja($param)
    {
        $respuesta = false;
        if (isset($param['idcompraestadotipo'])) {
            $obj = Compraestadotipo::find($param['idcompraestadotipo']);
            if ($obj) {
                $obj->delete();
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Modifica un registro de la tabla compraestadotipo a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function modificacion($param)
    {
        $respuesta = false;
        if (isset($param['idcompraestadotipo'])) {
            $obj = Compraestadotipo::find($param['idcompraestadotipo']);
            if ($obj) {
                $obj->update([
                    'cestdescripcion' => $param['cestdescripcion'],
                    'cetdetalle' => $param['cetdetalle']
                ]);
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Busca compraestadotipos según los parámetros proporcionados
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $query = Compraestadotipo::query();

        if (isset($param['idcompraestadotipo']) && !empty($param['idcompraestadotipo'])) {
            $query->where('idcompraestadotipo', $param['idcompraestadotipo']);
        }

        if (isset($param['cestdescripcion']) && !empty($param['cestdescripcion'])) {
            $query->where('cestdescripcion', $param['cestdescripcion']);
        }

        if (isset($param['cetdetalle']) && !empty($param['cetdetalle'])) {
            $query->where('cetdetalle', $param['cetdetalle']);
        }

        $resultados = $query->get();

        return $resultados;
    }
}
