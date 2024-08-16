<?php
class Persona
{
  private $nombre;
  private $apellido;
  private $edad;
  private $direccion;

  public function __construct($nombre, $apellido, $edad, $direccion)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    $this->direccion = $direccion;
  }

  public function getNombre()
  {
    return $this->nombre;
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getApellido()
  {
    return $this->apellido;
  }
  public function setApellido($apellido)
  {
    $this->apellido = $apellido;
  }

  public function getEdad()
  {
    return $this->edad;
  }
  public function setEdad($edad)
  {
    $this->edad = $edad;
  }

  public function getDireccion()
  {
    return $this->direccion;
  }
  public function setDireccion($direccion)
  {
    $this->direccion = $direccion;
  }

  public function __toString()
  {
    return "Nombre: " . $this->getNombre() . "\nApellido: " . $this->getApellido() . "\nEdad: " . $this->getEdad() . " años\nDirección: " .$this->getDireccion();
  }

  public function saludar(){
    return "Hola, yo soy " . $this->getNombre() . ' ' . $this->getApellido() . " tengo " . $this->getEdad() . " años y vivo en " . $this->getDireccion();
  }
}
