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
	
}