<?php

include_once '../../../configuracion.php';

$datos = darDatosSubmitted();
//print_r($datos) . "\n";
$objAbmPersona = new AbmPersona();
$arregloAux = $objAbmPersona->arreglar($datos);
$arreglo = $arregloAux[0];
$arregloClaves = array_keys($arreglo);
//print_r($arreglo);

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
          <?php foreach ($arreglo as $clave => $valor) {
            $i = 0;
            echo "<tr><th scope='row'>". $arregloClaves[$i] ."</th><td>". $arreglo[$clave] ."</td></tr>";
            $i++;
          } ?>
        </tbody>

      </table>
    </div>
    <div class="col-6">
      <h3 class="text-center">Vehículos</h3>
      <div class="vstack gap-3">

      </div>
    </div>
  </div>
</main>

<?php include_once '../../estructura/pie.php' ?>