<?php
class Session
{
  private $usuario;
  private $rol;

  /**
   * Constructor que inicia la sesión.
   */
  public function __construct( $usuario,  $rol){$this->usuario = $usuario;$this->rol = $rol;}
	
  public function getUsuario() {return $this->usuario;}

	public function getRol() {return $this->rol;}

	public function setUsuario( $usuario): void {$this->usuario = $usuario;}

	public function setRol( $rol): void {$this->rol = $rol;}

  /**
   * Actualiza las variables de sesión con los valores ingresados.
   */
	public function iniciar($nombreUsuario, $psw)
  {}

  /**
   * Valida si la sesión actual tiene usuario y password válidos.
   * @return bool
   */
  public function validar()
  {}

  /**
   * Devuelve bool si la sesión esta activa o no.
   * @return bool
   */
  public function activa()
  {}

  /**
   * Cierra la sesión actual
   */
  public function cerrar()
  {}
}