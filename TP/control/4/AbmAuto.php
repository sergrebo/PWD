<?php
class AbmAuto{
  //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

  /**
   * Espera como parametro un arreglo asociativo donde las claves coincide con los nombres instancias del objeto
   * @param array $param
   * @return Auto
   */
  private function cargarObjeto($param){
    $obj = null;
    if (array_key_exists('Patente', $param) && array_key_exists('Marca', $param) && array_key_exists('Modelo', $param) && array_key_exists('DniDuenio', $param)) {            //¿MAYUSCULAS? ¿Se reciben de un formulario?
      $obj = new Auto();
      $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $param['DniDuenio']);
    }
    return $obj;
  }

  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son clave primaria
   * @param array $param
   * @return Auto
   */
  private function cargarObjetoConClave($param){
    $obj = null;
    if (isset($param['Patente'])) {
      $obj = new Auto();
      $obj->setear($param['Patente'], null, null, null);
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
    if (isset($param['Patente'])) {
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
    //$param['Patente'] = null;
    //Linea exclusiva para clases con id incremental
    $objAuto = $this->cargarObjeto($param);
    if ($objAuto != null && $objAuto->insertar()) {
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
      $objAuto = $this->cargarObjetoConClave($param);
      if ($objAuto != null && $objAuto->eliminar()) {
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
      $objAuto = $this->cargarObjeto($param);
      if ($objAuto != null && $objAuto->modificar()) {
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
      if (isset($param['Patente'])) {
        $where .= " and Patente ='". $param['Patente'] ."'";
      }
      if (isset($param['Marca'])) {
        $where .= " and Marca ='". $param['Marca'] ."'";
      }
      if (isset($param['Modelo'])) {
        $where .= " and Modelo ='". $param['Modelo'] ."'";
      }
      if (isset($param['DniDuenio'])) {
        $where .= " and DniDuenio ='". $param['DniDuenio'] ."'";
      }
    }
  }
}
?>