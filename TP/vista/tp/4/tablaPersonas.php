<main class="container">
  <table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">N° DNI</th>
        <th scope="col">Apellido y nombre</th>
        <th scope="col">Fecha nacimiento</th>
        <th scope="col">Télefono</th>
        <th scope="col">Domicilio</th>
        <th scope="col" class="text-center">Detalle</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($arreglo as $persona) {
        echo "<tr><th scope='row'>". $persona['nroDni'] ."</th><td>". $persona['apellido'] . ', ' . $persona['nombre'] ."</td><td>". $persona['fechaNac'] ."</td><td>". $persona['telefono'] ."</td><td>". $persona['domicilio'] ."</td><td class='text-center'><a href='./autosPersona.php?nroDni=". $persona['nroDni'] ."'><i class='bi bi-link-45deg'></i></a></td></tr>";
      } ?>
    </tbody>
  </table>
</main>