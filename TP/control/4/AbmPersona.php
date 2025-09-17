<?php
class AbmPersona{
  //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

  /**
   * Espera como parametro un arreglo asociativo donde las claves coincide con los nombres instancias del objeto
   * @param array $param
   * @return Persona
   */
  private function cargarObjeto($param){
    $obj = null;
    if (array_key_exists('NroDni', $param) && array_key_exists('Apellido', $param) && array_key_exists('Nombre', $param) && array_key_exists('FechaNac', $param) && array_key_exists('Telefono', $param) && array_key_exists('domicilio', $param)) {            //¿MAYUSCULAS? ¿Se reciben de un formulario?
      $obj = new Persona();
      $obj->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['FechaNac'], $param['Telefono'], $param['Domicilio']);
    }
    return $obj;
  }

  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son clave primaria
   * @param array $param
   * @return Persona
   */
  private function cargarObjetoConClave($param){
    $obj = null;
    if (isset($param['NroDni'])) {
      $obj = new Persona();
      $obj->setear($param['NroDni'], null, null, null, null, null);
    }
    return $obj;
  }

  /**
   * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
   * @param array $param
   * @return boolean
   */
  private function seteadosCamposClaves($param){
    $respuesta = false;
    if (isset($param['NroDni'])) {
      $respuesta = true;
    }
    return $respuesta;
  }

  /**
   * 
   * @param array $param
   * @return boolean
   */
  public function alta($param){
    $respuesta = false;
    //$param['NroDni'] = null;
    //Linea exclusiva para clases con id incremental
    $objPersona = $this->cargarObjeto($param);
    if ($objPersona != null && $objPersona->insertar()) {
      $respuesta = true;
    }
    return $respuesta;
  }

  /**
   * Permite eliminar un objeto
   * @param array $param
   * @return boolean
   */
  public function baja($param){
    $respuesta = false;
    if ($this->seteadosCamposClaves($param)) {
      $objPersona = $this->cargarObjetoConClave($param);
      if ($objPersona != null && $objPersona->eliminar()) {
        $respuesta = true;
      }
    }
    return $respuesta;
  }

  /**
   * Permite modificar un objeto
   * @param array $param
   * @return boolean
   */
  public function modificacion($param){
    $respuesta = false;
    if ($this->seteadosCamposClaves($param)) {
      $objPersona = $this->cargarObjeto($param);
      if ($objPersona != null && $objPersona->modificar()) {
        $respuesta = true;
      }
    }
    return $respuesta;
  }

  /**
   * Permite buscar un objeto
   * @param array $param
   * @return boolean
   */
  public function buscar($param){
    $where = " true ";
    if ($param != null) {
      if (isset($param['NroDni'])) {
        $where .= " and NroDni ='". $param['NroDni'] ."'";
      }
      if (isset($param['Apellido'])) {
        $where .= " and Apellido ='". $param['Apellido'] ."'";
      }
      if (isset($param['Nombre'])) {
        $where .= " and Nombre ='". $param['Nombre'] ."'";
      }
      if (isset($param['FechaNac'])) {
        $where .= " and FechaNac ='". $param['FechaNac'] ."'";
      }
      if (isset($param['Telefono'])) {
        $where .= " and Telefono ='". $param['Telefono'] ."'";
      }
      if (isset($param['Domicilio'])) {
        $where .= " and Domicilio ='". $param['Domicilio'] ."'";
      }
    }
  }
}
?>