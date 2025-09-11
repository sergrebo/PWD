<?php
  include_once "../../../control/1/Persona5.php";
  include_once '../../../utils/funciones.php';

  $datos = darDatosSubmitted();
  $obj = new Persona();
  $saludo = $obj-> saludo($datos);

  include_once '../../estructura/cabecera-retorno.php' ?>

  <div>
    <h3>Saludo</h3>
    <p><?php echo $saludo; ?></p>
  </div> 

<?php include_once '../../estructura/pie.php' ?>