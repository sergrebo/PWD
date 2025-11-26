<?php namespace TPfinal\Controladores;

use TPfinal\Modelos\Compra;

class AbmCompra
{
    /**
     * Crea un nuevo registro en la tabla compra a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function alta($param)
    {
        $respuesta = false;
        // Compra requires: idusuario. cofecha is optional (DB default).
        if (isset($param['idusuario'])) {
            $data = [
                'idusuario' => $param['idusuario']
            ];
            if (isset($param['cofecha'])) {
                $data['cofecha'] = $param['cofecha'];
            }
            $nuevaCompra = Compra::create($data);
            if (!empty($nuevaCompra)) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Elimina un registro en la tabla compra a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function baja($param)
    {
        $respuesta = false;
        if (isset($param['idcompra'])) {
            $obj = Compra::find($param['idcompra']);
            if ($obj) {
                $obj->delete();
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Modifica un registro de la tabla compra a partir del arreglo proviniente de un formulario
     * @param array $param
     * @return bool
     */
    public function modificacion($param)
    {
        $respuesta = false;
        if (isset($param['idcompra'])) {
            $obj = Compra::find($param['idcompra']);
            if ($obj) {
                $obj->update([
                    'cofecha' => $param['cofecha'],
                    'idusuario' => $param['idusuario']
                ]);
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    /**
     * Busca compras según los parámetros proporcionados
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $query = Compra::query();

        if (isset($param['idcompra']) && !empty($param['idcompra'])) {
            $query->where('idcompra', $param['idcompra']);
        }

        if (isset($param['cofecha']) && !empty($param['cofecha'])) {
            $query->where('cofecha', $param['cofecha']);
        }

        if (isset($param['idusuario']) && !empty($param['idusuario'])) {
            $query->where('idusuario', $param['idusuario']);
        }

        $compras = $query->get();

        return $compras;
    }
}
