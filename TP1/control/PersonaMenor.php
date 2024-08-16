<?php
class PersonaMenor extends Persona {
  public function __construct($nombre, $apellido, $edad, $direccion)
  {
    parent::__construct($nombre, $apellido, $edad, $direccion);
  }

  public function __toString()
  {
    parent::__toString();
  }

  public function saludar(){
    return 'Me llamo '. $this->getNombre(). ' y tengo '. $this->getEdad(). ' años.';
  }
}
