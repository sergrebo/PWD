<!-- <main class="container"> -->
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Patente</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">DNI dueño</th>

        <!-- Variación de la tabla en el caso de provenir de cambioDuenio.php -->
        <?php if ($_GET['origen'] == 'cambioDuenio') {
          echo "<th scope='col'>Seleccionar</th>";
        } ?>

      </tr>
    </thead>
    <tbody>
      <!-- Bucle que imprime los datos extraidos de la base de datos -->
      <?php foreach ($arregloAutos as $auto) {
        echo "<tr><th scope='row'>". $auto['patente'] ."</th><td>". $auto['marca'] ."</td><td>". $auto['modelo'] ."</td><td>". $auto['dniDuenio'] ."</td>";

        //Variación de la tabla en el caso de provenir de cambioDuenio.php
        if ($_GET['origen'] == 'cambioDuenio') {
          echo '<td><a href="./cambioDuenio.php?patente='. $auto['patente'] .'"><i class="bi bi-check2-circle"></i></a></td>';
        }

        echo "</tr>";
      } ?>
    </tbody>
  </table>
<!-- </main> -->