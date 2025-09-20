<main class="container">
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
    <div class="card mb-5">
      <div class="card-body text-center">
        Si el dueño del vehículo no se encuentra en la lista, <a href="#divColapsable" data-bs-toggle="collapse" aria-expanded="false" aria-controls="divColapsable">clickee aquí</a>.
      </div>
      <div class="collapse mx-auto mb-5" id="divColapsable">
        <div class="card card-body">
          <h4 class="text-center mb-5">FORMULARIO DE ALTA - PERSONA</h4>
          <form action="./accionNuevaPersona.php?origen=personaNoEncontrada" method="post" id="formulario" class="needs-validation col-10 mx-auto" novalidate>
            <div class="row">
              <div class="col form-group mb-3 position-relative">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
              </div>
              <div class="col form-group mb-3 position-relative">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col form-group mb-3 position-relative">
                <label for="nroDni" class="form-label">N° de documento de identidad</label>
                <input type="text" name="nroDni" id="nroDni" class="form-control">
              </div>
              <div class="col form-group mb-3 position-relative">
                <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
                <input type="date" name="fechaNac" id="fechaNac" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col form-group mb-3 position-relative">
                <label for="domicilio" class="form-label">Domicilio</label>
                <input type="text" name="domicilio" id="domicilio" class="form-control">
              </div>
              <div class="col form-group mb-3 position-relative">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control">
              </div>
            </div>
            <div class="mb-5">
              <input type="submit" value="Enviar">
            </div>
          </form>
        </div>
      </div>
    </div>
</main>
<script src="../../js/validacionmk2.js"></script>