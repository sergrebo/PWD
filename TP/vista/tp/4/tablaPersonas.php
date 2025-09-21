<main class="container">
  <table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">N° DNI</th>
        <th scope="col">Apellido y nombre</th>
        <th scope="col">Fecha nacimiento</th>
        <th scope="col">Télefono</th>
        <th scope="col">Domicilio</th>

        <!--Variación de la tabla en el caso de provenir de cambioDuenio.php -->
        <?php if ($_GET['origen'] == 'cambioDuenio') {
          echo "<th scope='col' class='text-center'>Seleccionar</th>";
        } else {
          //Última columna por defecto de la tabla
          echo '<th scope="col" class="text-center">Detalle</th>';
        } ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($arreglo as $persona) {
        echo "<tr><th scope='row'>". $persona['nroDni'] ."</th><td>". $persona['apellido'] . ', ' . $persona['nombre'] ."</td><td>". $persona['fechaNac'] ."</td><td>". $persona['telefono'] ."</td><td>". $persona['domicilio'] ."</td>";

        //Variación de la tabla en el caso de provenir de cambioDuenio.php
        if ($_GET['origen'] == 'cambioDuenio') {
          echo "<td class='text-center'><a href='./cambioDuenio.php?nroDni=". $persona['nroDni'] ."'><i class='bi bi-check2-circle'></i></a></td>";

        } else {
          //Última columna por defecto de la tabla
          echo "<td class='text-center'><a href='./autosPersona.php?nroDni=". $persona['nroDni'] ."'><i class='bi bi-link-45deg'></i></a></td>";
        }
        echo "</tr>";
      } ?>
    </tbody>
  </table>
</main>