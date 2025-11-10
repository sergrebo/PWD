<?php
class AbmRol
{
  /**
   * Crea un nuevo registro en la tabla roles a partir del arreglo proviniente de un formulario
   * @param array $param
   * @return bool
   */
  public function alta($param)
  {
    $respuesta = false;
    if (!isset($param['rodescripcion']) || empty(trim($param['rodescripcion']))) {
      $nuevoRol = Rol::create(['rodescripcion' => $param['rodescripcion']]);
      if (!empty($nuevoRol)) {
        $respuesta = true;
      }
    }
    return $respuesta;
  }

  /**
   * Elimina un registro en la tabla roles a partir del arreglo proviniente de un formulario
   * @param array $param
   */
  public function baja($param)
  {
    $respuesta = false;
    $obj = Rol::find($param['id']);
    if ($obj) {
        $obj->delete();
        $respuesta = true;
    }
    return $respuesta;
  }

  /**
   * Modifica un registro de la tabla roles a partir del arreglo proviniente de un formulario
   * @param array $param
   * @return bool
   */
  public function modificiacion($param)
  {
    $respuesta = false;
    $obj = Rol::find($param['id']);
    $control = $obj->update(['rodescripcion' => $param['rodescripcion']]);    // update() responde el numero de registros modificados
    if ($control == 1) {
      $respuesta = true;
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
    // El método query() tiene un "modo construcción" donde armo la consulta completa paso a paso. Rol::query() es como decir: "Preparar una consulta para la tabla 'roles'"
    $query = Rol::query();
    
    // Buscar por ID
    if (isset($param['id']) && !empty($param['id']))
    {
      $query->where('id', $param['id']);
    }
    
    // Buscar por descripción (búsqueda parcial)
    if (isset($param['rodescripcion']) && !empty($param['rodescripcion']))
    {
      $query->where('rodescripcion', 'like', '%' . $param['rodescripcion'] . '%');
    }
    
    // Ejecutar la consulta y devolver resultados
    $roles = $query->get();
    
    return [
      'success' => true,
      'data' => $roles,
      'total' => $roles->count()
    ];
  }
}