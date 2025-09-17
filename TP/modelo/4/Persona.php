<?php
class Persona {
  private $nroDni;
  private $apellido;
  private $nombre;
  private $fechaNac;
  private $telefono;
  private $domicilio;
  private $mensajeOperacion;

  public function __construct(){
    $this->nroDni = "";
    $this->apellido = "";
    $this->nombre = "";
    $this->fechaNac = "";
    $this->telefono = "";
    $this->domicilio = "";
    $this->mensajeOperacion;
  }

  public function setear($nroDni,  $apellido,  $nombre,  $fechaNac,  $telefono,  $domicilio){
    $this->setNroDni($nroDni);
    $this->setApellido($apellido);
    $this->setNombre($nombre);
    $this->setFechaNac($fechaNac);
    $this->setTelefono($telefono);
    $this->setDomicilio($domicilio);
  }
	

  public function getNroDni() {return $this->nroDni;}

	public function getApellido() {return $this->apellido;}

	public function getNombre() {return $this->nombre;}

	public function getFechaNac() {return $this->fechaNac;}

	public function getTelefono() {return $this->telefono;}

	public function getDomicilio() {return $this->domicilio;}

	public function getMensajeOperacion() {return $this->mensajeOperacion;}

	public function setNroDni( $nroDni): void {$this->nroDni = $nroDni;}

	public function setApellido( $apellido): void {$this->apellido = $apellido;}

	public function setNombre( $nombre): void {$this->nombre = $nombre;}

	public function setFechaNac( $fechaNac): void {$this->fechaNac = $fechaNac;}

	public function setTelefono( $telefono): void {$this->telefono = $telefono;}

	public function setDomicilio( $domicilio): void {$this->domicilio = $domicilio;}

  public function setMensajeOperacion( $mensajeOperacion): void {$this->mensajeOperacion = $mensajeOperacion;}

	public function __toString() {
    return "Persona: " . $this->getNroDni() . ", " . $this->getApellido() . ", " . $this->getNombre() . ", " . $this->getFechaNac() . ", " . $this->getTelefono() . ", " . $this->getDomicilio();
  }

  public function cargar(){
    $respuesta = false;
    $base = new BaseDatos();
    $sql = "SELECT * FROM persona WHERE NroDni=" . $this->getNroDni();
    if ($base->Iniciar()) {
      $respuesta = $base->Ejecutar($sql);
      if ($respuesta > -1) {
        if ($respuesta > 0) {
          $row = $base->Registro();
          $this->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['FechaNac'], $row['Telefono'], $row['Domicilio']);
        }
      }
    } else {
      $this->setMensajeOperacion("Persona->listar: " . $base->getError());
    }
    return $respuesta;
  }

  public function insertar(){
    $respuesta = false;
    $base = new BaseDatos();
    $sql = "INSERT INTO persona(NroDni, Apellido, Nombre, FechaNac, Telefono, Domicilio) VALUES('". $this->getNroDni() . "', '". $this->getApellido() ."', '". $this->getNombre() ."', '". $this->getFechaNac() ."', '". $this->getTelefono() ."', '". $this->getDomicilio() ."')";
    if ($base->Iniciar()) {
      if ($base->Ejecutar($sql)) {
        $respuesta = true;
      } else {
        $this->setMensajeOperacion("Persona->insertar: " . $base->getError());
      }
    } else {
      $this->setMensajeOperacion("Persona->insertar: " . $base->getError());
    }
    return $respuesta;
  }

  public function modificar(){
    $respuesta = false;
    $base = new BaseDatos();
    $sql = "UPDATE persona SET Apellido='". $this->getApellido() ."', Nombre='". $this->getNombre() ."', FechaNac='". $this->getFechaNac() ."', Telefono='". $this->getTelefono() ."', Domicilio='". $this->getDomicilio() ."'";
    if ($base->Iniciar()) {
      if ($base->Ejecutar($sql)) {
        $respuesta = true;
      } else {
        $this->setMensajeOperacion("Persona->modificar: " . $base->getError());
      }
    } else {
      $this->setMensajeOperacion("Persona->modificar: " . $base->getError());
    }
    return $respuesta;
  }

  public function eliminar(){
    $respuesta = false;
    $base = new BaseDatos();
    $sql = "DELETE FROM persona WHERE NroDni='" . $this->getNroDni() . "'";
    if ($base->Iniciar()) {
      if ($base->Ejecutar($sql)) {
        $respuesta = true;
      } else {
        $this->setMensajeOperacion("Persona->eliminar: ". $base->getError());
      }
    } else {
      $this->setMensajeOperacion("Persona->eliminar: " . $base->getError());
    }
    return $respuesta;
  }

  public function listar($parametro=""){
    $arreglo = array();
    $base = new BaseDatos();
    $sql = "SELECT * FROM persona";
    if ($parametro != "") {
      $sql .= ' WHERE ' . $parametro;
    }
    $respuesta = $base->Ejecutar($sql);
    if ($respuesta > -1) {
      if ($respuesta > 0) {
        while ($row = $base->Registro()) {
          $obj = new Persona();
          $obj->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['FechaNac'], $row['Telefono'], $row['Domicilio']);
          array_push($arreglo, $obj);
        }
      }
    } else {
      $this->setMensajeOperacion("Persona->listar " . $base->getError());
    }
    return $arreglo;
  }
}