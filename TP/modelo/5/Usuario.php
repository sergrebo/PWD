<?php
class Usuario {
  private $idUsuario;
  private $usNombre;
  private $usPass;
  private $usMail;
  private $usDeshabilitado;
  private $mensajeOperacion;

  public function __construct()
  {
    $this->idUsuario = "";
    $this->usNombre = "";
    $this->usPass = "";
    $this->usMail = "";
    $this->usDeshabilitado = "";
    $this->mensajeOperacion = "";
  }

  /**
   * Setea los atributos en un objeto usuario ya creado
   */
  public function setear($idUsuario, $usNombre, $usPass, $usMail, $usDeshabilitado)
  {
    $this->setIdUsuario($idUsuario);
    $this->setUsNombre($usNombre);
    $this->setUsPass($usPass);
    $this->setUsMail($usMail);
    $this->setUsDeshabilitado($usDeshabilitado);
  }

  public function getIdUsuario() {return $this->idUsuario;}

	public function getUsNombre() {return $this->usNombre;}

	public function getUsPass() {return $this->usPass;}

	public function getUsMail() {return $this->usMail;}

	public function getUsDeshabilitado() {return $this->usDeshabilitado;}

	public function getMensajeOperacion() {return $this->mensajeOperacion;}

	public function setIdUsuario( $idUsuario): void {$this->idUsuario = $idUsuario;}

	public function setUsNombre( $usNombre): void {$this->usNombre = $usNombre;}

	public function setUsPass( $usPass): void {$this->usPass = $usPass;}

	public function setUsMail( $usMail): void {$this->usMail = $usMail;}

	public function setUsDeshabilitado( $usDeshabilitado): void {$this->usDeshabilitado = $usDeshabilitado;}

  public function setMensajeOperacion( $mensajeOperacion): void {$this->mensajeOperacion = $mensajeOperacion;}

  public function __toString()
  {
    return "Usuario: id: " . $this->getIdUsuario() . " | Nombre: " . $this->getUsNombre() . " | Pass: " . $this->getUsPass() . " | mail: " . $this->getUsMail() . " | Deshabilitado: " . $this->getUsDeshabilitado() . " | Mensaje: " . $this->getMensajeOperacion(); 
  }

  /**
   * Carga un objeto usuario desde un registro de la base de datos
   */
  public function cargar()
  {
    $respuesta = false;
    $base = new BaseDatos();
    $sql = "SELECT * FROM usuarios WHERE id_usuario=" . $this->getIdUsuario();
    if ($base->iniciar()) {
      $respuesta = $base->Ejecutar($sql);
      if ($respuesta > -1) {
        if ($respuesta > 0) {
          $row = $base->Registro();
          $this->setear($row['id_usuario'], $row['us_nombre'], $row['us_pass'], $row['us_mail'], $row['us_deshabilitado']);
        }
      }
    } else {
      $this->setMensajeOperacion("Usuario->cargar: " . $base->getError());
    }
    return $respuesta;
  }

  /**
   * Inserta un nuevo registro a la tabla usuarios
   */
  public function insertar()
  {
    $respuesta = false;
    $base = new BaseDatos();
    // Todo id_usuario como numero auto incremental, por eso no se encuentra en la sentencia sql
    $sql = "INSERT INTO usuarios(us_nombre, us_pass, us_mail, us_deshabilitado) VALUES ('" . $this->getUsNombre() . "', '" . $this->getUsPass() . "', '" . $this->getUsMail() . "', '" . $this->getUsDeshabilitado() . "');";
    if ($base->Iniciar()) {
      if ($elid = $base->Ejecutar($sql)) {
        $this->setId($elid);
        $respuesta = true;
      } else {
        $this->setMensajeOperacion("Usuario->insertar: " . $base->getError());
      }
    } else {
      $this->setMensajeOperacion("Tabla->insertar: " . $base->getError());
    }
    return $respuesta;
  }
}