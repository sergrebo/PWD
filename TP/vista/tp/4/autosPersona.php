<?php

include_once '../../../configuracion.php';

$datos = darDatosSubmitted();
//print_r($datos);
$objAbmPersona = new AbmPersona();
$arregloAux = $objAbmPersona->arreglar($datos);
$arreglo = $arregloAux[0];

//Creo un arreglo indexado que tiene a las claves como valor preparandolo para un bucle for
$arregloClaves = array_keys($arreglo);

//Convierto las claves en indices preparandolo para recursar un bucle for
$arreglo = array_values($arreglo);

//Adecúo las claves para que sean mas presentables al usuario
for ($i=0; $i < count($arregloClaves); $i++) {
  switch ($arregloClaves[$i]) {
    case 'nroDni':
      $arregloClaves[$i] = 'N° DNI';
      break;
    case 'apellido':
      $arregloClaves[$i] = 'Apellido';
      break;
    case 'nombre':
      $arregloClaves[$i] = 'Nombre';
      break;
    case 'fechaNac':
      $arregloClaves[$i] = 'Fecha de nacimiento';
      break;
    case 'telefono':
      $arregloClaves[$i] = 'Teléfono';
      break;
    case 'domicilio':
      $arregloClaves[$i] = 'Domicilio';
      break;
  }
}

$objAbmAuto = new AbmAuto();
$datos = ['dniDuenio' => $datos['nroDni']];
$arregloAutos = $objAbmAuto->arreglar($datos);
//print_r($arregloAutos);

include_once '../../estructura/cabecera.php' ?>

<main class="mt-4 container">
  <div class="row">
    <div class="col-6">
      <h3 class="text-center">Datos personales</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">CAMPO</th>
            <th scope="col">DATO</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 0; $i < count($arreglo); $i++) { 
            echo "<tr><th scope='row'>". $arregloClaves[$i] ."</th><td>". $arreglo[$i] ."</td></tr>";
          } ?>
        </tbody>

      </table>
    </div>
    <div class="col-6">
      <?php
      if (empty($arregloAutos)) {
        echo "<h3 class='text-center text-danger'>Persona sin vehículos registrados.</h3>";
      } else {
        echo "<h3 class='text-center'>Vehículos</h3>";
        include './tablaAutos.php';
        //echo "<table class='table'></table>";
      }
      ?>

    </div>
  </div>
</main>

<?php include_once '../../estructura/pie.php' ?>