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
    if (array_key_exists('patente', $param) && array_key_exists('marca', $param) && array_key_exists('modelo', $param) && array_key_exists('dniDuenio', $param)) {            //¿MAYUSCULAS? ¿Se reciben de un formulario?
      $obj = new Auto();
      $obj->setear($param['patente'], $param['marca'], $param['modelo'], $param['dniDuenio']);
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
    if (isset($param['patente'])) {
      $obj = new Auto();
      $obj->setear($param['patente'], null, null, null);
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
    if (isset($param['patente'])) {
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
    //$param['patente'] = null;
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
   * @return array
   */
  public function buscar($param){
    $where = " true ";
    if ($param != null) {
      if (isset($param['patente'])) {
        $where .= " and patente ='". $param['patente'] ."'";
      }
      if (isset($param['marca'])) {
        $where .= " and marca ='". $param['marca'] ."'";
      }
      if (isset($param['modelo'])) {
        $where .= " and modelo ='". $param['modelo'] ."'";
      }
      if (isset($param['dniDuenio'])) {
        $where .= " and dniDuenio ='". $param['dniDuenio'] ."'";
      }
    }
    //print_r($where);
    $arreglo = Auto::listar($where);
    return $arreglo;
  }

  /**
   * Transforma un arreglo de objetos en un arreglo de arreglos para manipularlo en vista
   * @param array $param
   * @return array
   */
  public function arreglar($param){
    $arregloAux = $this->buscar($param);
    $arreglo = array();
    $respuesta = array();
    foreach ($arregloAux as $objAuto) {
      $arreglo['patente'] = $objAuto->getPatente();
      $arreglo['marca'] = $objAuto->getMarca();
      $arreglo['modelo'] = $objAuto->getModelo();
      $arreglo['dniDuenio'] = $objAuto->getDniDuenio();
      array_push($respuesta, $arreglo);
    }
    return $respuesta;
  }
}
?>