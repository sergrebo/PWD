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
    if (array_key_exists('nroDni', $param) && array_key_exists('apellido', $param) && array_key_exists('nombre', $param) && array_key_exists('fechaNac', $param) && array_key_exists('telefono', $param) && array_key_exists('domicilio', $param)) {            //¿MAYUSCULAS? ¿Se reciben de un formulario?
      $obj = new Persona();
      $obj->setear($param['nroDni'], $param['apellido'], $param['nombre'], $param['fechaNac'], $param['telefono'], $param['domicilio']);
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
    if (isset($param['nroDni'])) {
      $obj = new Persona();
      $obj->setear($param['nroDni'], null, null, null, null, null);
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
    if (isset($param['nroDni'])) {
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
    //$param['nroDni'] = null;
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
   * @return array
   */
  public function buscar($param){
    $where = " true ";
    if ($param != null) {
      if (isset($param['nroDni'])) {
        $where .= " and nroDni ='". $param['nroDni'] ."'";
      }
      if (isset($param['apellido'])) {
        $where .= " and apellido ='". $param['apellido'] ."'";
      }
      if (isset($param['nombre'])) {
        $where .= " and nombre ='". $param['nombre'] ."'";
      }
      if (isset($param['fechaNac'])) {
        $where .= " and fechaNac ='". $param['fechaNac'] ."'";
      }
      if (isset($param['telefono'])) {
        $where .= " and telefono ='". $param['telefono'] ."'";
      }
      if (isset($param['domicilio'])) {
        $where .= " and domicilio ='". $param['domicilio'] ."'";
      }
    }
    //print_r($where);
    $arreglo = Persona::listar($where);
    return $arreglo;
  }

  /**
   * Transforma un arreglo de objetos en un arreglo de arreglos para manipularlo en vista
   * @param array $param
   * @return array
   */
  public function arreglar($param){
    $arregloAux = $this->buscar($param);
    //print_r($arregloAux);
    $arreglo = array();
    $respuesta = array();
    foreach ($arregloAux as $objPersona) {
      $arreglo['nroDni'] = $objPersona->getNroDni();
      $arreglo['apellido'] = $objPersona->getApellido();
      $arreglo['nombre'] = $objPersona->getNombre();
      $arreglo['fechaNac'] = $objPersona->getFechaNac();
      $arreglo['telefono'] = $objPersona->getTelefono();
      $arreglo['domicilio'] = $objPersona->getDomicilio();
      array_push($respuesta, $arreglo);
    }
    return $respuesta;
  }
}
?>