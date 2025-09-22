<table class="table mt-4 mb-5">
  <thead>
    <tr>
      <th scope="col">N° DNI</th>
      <th scope="col">Apellido y nombre</th>
      <th scope="col">Fecha nacimiento</th>
      <th scope="col">Télefono</th>
      <th scope="col">Domicilio</th>
      <th scope="col" class="text-center">Elegir</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($arreglo as $persona) {
      echo "<tr><th scope='row'>". $persona['nroDni'] ."</th><td>". $persona['apellido'] . ', ' . $persona['nombre'] ."</td><td>". $persona['fechaNac'] ."</td><td>". $persona['telefono'] ."</td><td>". $persona['domicilio'] ."</td><td class='text-center'><a href='./nuevoAuto.php?nroDni=". $persona['nroDni'] ."'><i class='bi bi-check2-circle'></i></a></td></tr>";
    } ?>
  </tbody>
</table>