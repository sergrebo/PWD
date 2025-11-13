<?php

//un script Vista/listarUsuario.php que liste los usuario registrados y permita actualizar sus datos o realizar un borrado lógico. Las acciones que se van a poder invocar son: accion/actualizarLogin.php y accion/eliminarLogin.php

require '../../../vendor/autoload.php';
require '../../../bootstrap.php';

use TP5\Controladores\AbmUsuario;
use TP5\Modelos\Usuario;

$abmUsuario = new AbmUsuario;
$usuarios = $abmUsuario->buscar([]);

include_once '../../estructura/cabecera-retorno.php';
?>

<main class="container my-5">
  <!-- <pre><?php print_r($usuarios['data']->toArray()) ?></pre> -->
  <table class="table">
    <thead>
      <tr>
        <th scope="col" class="col-1 text-center">ID</th>
        <th scope="col" class="col">Usuario</th>
        <th scope="col" class="col">e-mail</th>
        <th scope="col" class="col-1 text-center">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($usuarios['data']->toArray() as $usuario) {
        echo "<tr><th scope='row' class='text-center'>" . $usuario['id'] . "</th><td>" . $usuario['usnombre'] . "</td><td>" . $usuario['usmail'] . "</td><td class='text-center d-flex justify-content-evenly'><a href='#' title='Modificar'><i class='bi bi-pen'></i></a><a href='#' title='Borrar'><i class='bi bi-trash'></i></a></td></tr>";
      }
      ?>
    </tbody>
  </table>

</main>

<?php include_once '../../estructura/pie.php'; ?>