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

}