<?php

Class Horas{

  public function sumaHoras($horasDias){
    $horas = array_values($horasDias);

    $totalHoras = array_sum($horas);

    return $totalHoras;
  }
}