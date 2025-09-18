<main class="container">
  <table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">Patente</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">DNI dueño</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($arreglo as $auto) {
        echo "<tr><th scope='row'>". $auto['patente'] ."</th><td>". $auto['marca'] ."</td><td>". $auto['modelo'] ."</td><td>". $auto['dniDuenio'] ."</td></tr>";
      } ?>
    </tbody>
  </table>
</main>