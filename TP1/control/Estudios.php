<?php
class Estudios
{
  public function mostrarEstudios($edad, $estudio) {
    if ($this->validarEstudios($edad, $estudio)) {
      if ($estudio == 'no') {
        $mensaje = 'No tengo estudios';
      } else {
        $mensaje = 'Mi nivel de estudio es ' . $estudio;
      }
      
    } else {
      $mensaje = 'Incongruencia edad - nivel de estudios';
    }
    return $mensaje;
  }

  public function validarEstudios($edad, $estudio) {
    $control = true;
    if ($edad < 13) {
      if ($estudio == 'primario' || $estudio == 'secundario') {
        $control = false;
      }
    } elseif ($edad < 18) {
      if ($estudio == 'secundario') {
        $control = false;
      }
    }
    return $control;
  }
}
