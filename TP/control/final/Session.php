<?php namespace TPfinal\Controladores;

class Session
{
  /**
   * Inicia la sesión de PHP si aún no se ha iniciado.
   */
  public function __construct()
  {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
  }

  /**
   * Actualiza las variables de sesión con los valores ingresados.
   */
  public function iniciar($idusuario, $usnombre, $usrol)
  {
    // Genero un nuevo ID de sesión para prevenir ataques Session Fixation
    session_regenerate_id(true);
    // Inicializo las variables de sesión con los valores ingresados
    $usData = [
      'idusuario' => $idusuario,
      'usnombre' => $usnombre,
      'usrol' => $usrol
    ];
    $_SESSION['usuario'] = $usData;
  }

  /**
   * Verifica si un usuario ha iniciado sesión.
   */
  public function validar()
  {
    return isset($_SESSION['usuario']);
  }
  
  /**
   * Devuelve la información del usuario que ha iniciado sesión.
   */
  public function getUsuario()
  {
    return $this->validar() ? $_SESSION['usuario'] : null;
  }

  /**
   * Cierra la sesión actual.
   */
  public function cerrar()
  {
    // Limpio todas las variables de sesión
    $_SESSION = [];

    // Si se desea destruir la cookie de sesión, también:
    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
      );
    }

    // Destruyo la sesión
    session_destroy();
  }
}    