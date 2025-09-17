<?php
class Auto {
  private $patente;
  private $marca;
  private $modelo;
  private $dniDuenio;
  private $mensajeOperacion;

  public function __construct(){
    $this->patente = "";
    $this->marca = "";
    $this->modelo = "";
    $this->dniDuenio = "";
    $this->mensajeOperacion= "";
  }
	
  public function setear($patente,  $marca,  $modelo,  $dniDuenio){
    $this->setPatente($patente);
    $this->setMarca($marca);
    $this->setModelo($modelo);
    $this->setDniDuenio($dniDuenio);
  }

  public function getPatente() {return $this->patente;}

	public function getMarca() {return $this->marca;}

	public function getModelo() {return $this->modelo;}

	public function getDniDuenio() {return $this->dniDuenio;}

	public function getMensajeOperacion() {return $this->mensajeOperacion;}

	public function setPatente( $patente): void {$this->patente = $patente;}

	public function setMarca( $marca): void {$this->marca = $marca;}

	public function setModelo( $modelo): void {$this->modelo = $modelo;}

	public function setDniDuenio( $dniDuenio): void {$this->dniDuenio = $dniDuenio;}

  public function setMensajeOperacion( $mensajeOperacion): void {$this->mensajeOperacion = $mensajeOperacion;}

	public function __toString(){
    return "Auto: " . $this->getPatente() . ", " . $this->getMarca() . ", " . $this->getModelo() . ", " . $this->getDniDuenio();
  }

  public function cargar(){
    $respuesta = false;
    $base = new BaseDatos();
    $sql = "SELECT * FROM auto WHERE Patente=" . $this->getPatente();
    if ($base->Iniciar()) {
      $respuesta = $base->Ejecutar($sql);                     //¿$res no deberia ser $respuesta?
      if ($respuesta > -1) {
        if ($respuesta > 0) {
          $row = $base->Registro();
          $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
        }
      }
    } else {
      $this->setMensajeOperacion("Auto->listar: " . $base->getError());
    }
    return $respuesta;
  }

  public function insertar(){
    $respuesta = false;
    $base = new BaseDatos();
    $sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) VALUES('". $this->getPatente() ."', '". $this->getMarca() ."', '". $this->getModelo() ."', '". $this->getDniDuenio() ."');";
    if ($base->Iniciar()) {
      if ($base->Ejecutar($sql)) {                  //¡Auto no tiene id!
        $respuesta = true;
      } else {
        $this->setMensajeOperacion("Auto->insertar: " . $base->getError());
      }
    } else {
      $this->setMensajeOperacion("Auto->insertar: " . $base->getError());
    }
    return $respuesta;
  }

  public function modificar(){
    $respuesta = false;
    $base = new BaseDatos();
    $sql = "UPDATE auto SET Modelo='". $this->getModelo() ."', Marca='". $this->getMarca() ."', DniDuenio='". $this->getDniDuenio() ."' WHERE Patente='". $this->getPatente() ."'";
    if ($base->Iniciar()) {
      if ($base->Ejecutar($sql)) {
        $respuesta = true;
      } else {
        $this->setMensajeOperacion("Auto->modificar: " . $base->getError());
      }
    } else {
      $this->setMensajeOperacion("Auto->modificar: " . $base->getError());
    }
    return $respuesta;
  }

  public function eliminar(){
    $respuesta = false;
    $base = new BaseDatos();
    $sql = "DELETE FROM auto WHERE Patente='" . $this->getPatente() . "'";
    if ($base->Iniciar()) {
      if ($base->Ejecutar($sql)) {
        $respuesta = true;
      } else {
        $this->setMensajeOperacion("Auto->eliminar: " . $base->getError());
      }
    } else {
      $this->setMensajeOperacion("Auto->eliminar: " . $base->getError());
    }
    return $respuesta;
  }

  public function listar($parametro=""){
    $arreglo = array();
    $base = new BaseDatos();
    $sql = "SELECT * FROM auto";
    if ($parametro != "") {
      $sql .= ' WHERE ' . $parametro;
    }
    $respuesta = $base->Ejecutar($sql);
    if ($respuesta > -1) {
      if ($respuesta > 0) {
        while ($row = $base->Registro()) {
          $obj = new Auto();
          $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
          array_push($arreglo, $obj);
        }
      }
    } else {
      $this->setMensajeOperacion("Auto->listar " . $base->getError());
    }
    return $arreglo;
  }
}