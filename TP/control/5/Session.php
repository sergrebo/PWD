<?php namespace TP5\Controladores;

use TP5\Controladores\AbmUsuario;

class Session
{
  private $usuario;
  private $rol;

  /**
   * Constructor que inicia la sesión.
   */
  public function __construct()
  {
    $this->usuario = "";
    $this->rol = "";
  }
	
  public function getUsuario() {return $this->usuario;}

	public function getRol() {return $this->rol;}

	public function setUsuario( $usuario): void {$this->usuario = $usuario;}

	public function setRol( $rol): void {$this->rol = $rol;}

  /**
   * Actualiza las variables de sesión con los valores ingresados.
   */
	public function iniciar($nombreUsuario, $psw)
  {
    // CONSULTA: Creo que no hay que setear la password en $_SESSION, pero si el rol
    session_start();
    $_SESSION['usnombre'] = $nombreUsuario;
    $this->setUsuario($nombreUsuario);
    $_SESSION['usrol'] = $psw;
    $this->setRol($psw);
  }

  /**
   * Valida si la sesión actual tiene usuario y password válidos.
   * @return bool
   */
  public function validar($param)
  {
    // CONSULTA: Creo que validar deberia tener como parametro los datos que vienen del formulario de login
    $respuesta = false;
    $busqueda = [];
    $abmUsuario = new AbmUsuario;
    $param['usnombre'] = $busqueda['usnombre'];
    $resultado = $abmUsuario->buscar($busqueda);
    if ($resultado['success'] == 1) {
      // Se encontró usuario con ese nombre
      $arregloUsuario = $resultado['data']->toArray()[0];
      if ($arregloUsuario['uspass'] == $param['uspass']) {
        // La contraseña es correcta
        $respuesta = true;
        $this->iniciar($param['usnombre'], $param['usrol']);
      }
    }
    return $respuesta;
  }

  /**
   * Devuelve bool si la sesión esta activa o no.
   * @return bool
   */
  public function activa()
  {

  }

  /**
   * Cierra la sesión actual
   */
  public function cerrar()
  {
    session_destroy();
  }
}