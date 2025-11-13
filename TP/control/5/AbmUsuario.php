<?php namespace TP5\Controladores;

use TP5\Modelos\Usuario;

class AbmUsuario
{
  //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

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
   */
  public function baja($param)
  {
    $respuesta = false;
    $obj = Usuario::find($param['id']);
    if ($obj) {
        $obj->delete();
        $respuesta = true;
    }
    return $respuesta;
  }

  /**
   * Modifica un registro de la tabla usuarios a partir del arreglo proviniente de un formulario
   * @param array $param
   * @return bool
   */
  public function modificiacion($param)
  {
    $respuesta = false;
    $obj = Usuario::find($param['id']);
    $control = $obj->update([
      'usnombre' => $param['usnombre'],
      'uspass' => $param['uspass'],
      'usmail' => $param['usmail']
    ]);
    // update() responde el numero de registros modificados que en este caso debe ser siempre 1
    if ($control == 1) {
      $respuesta = true;
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
    // El método query() tiene un "modo construcción" donde armo la consulta completa paso a paso. Rol::query() es como decir: "Preparar una consulta para la tabla 'roles'"
    $query = Usuario::query();
    
    // Buscar por ID
    if (isset($param['id']) && !empty($param['id']))
    {
      $query->where('id', $param['id']);
    }
    
    // Buscar por nombre de usuario
    if (isset($param['usnombre']) && !empty($param['usnombre']))
    {
      $query->where('usnombre', $param['usnombre']);
    }

    // Buscar por correo electronico
    if (isset($param['usmail']) && !empty($param['usmail']))
    {
      $query->where('usmail', $param['usmail']);
    }

    // Buscar por fecha de deshabilitado
    if (isset($param['usdeshabilitado']) && !empty($param['usdeshabilitado']))
    {
      $query->where('usdeshabilitado', $param['usdeshabilitado']);
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