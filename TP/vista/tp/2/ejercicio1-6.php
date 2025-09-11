<?php include_once '../../estructura/cabecera-retorno.php' ?>

  <main class="container">
    <h1 class="mt-4 text-center">Ejercicio N°6</h1>
    <p>Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página que procesa el formulario la cantidad de deportes que practica.</p>
    <div class="col-4 mx-auto">
      <form action="./action_ej1-6.php" method="get" id="formulario" class="needs-validation" novalidate>
        <div class="mb-3 position-relative">
          <label for="nombre">Nombre</label> 
          <input type="text" name="nombre" id="nombre" required class="form-control">
        </div>
        <div class="mb-3 position-relative">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" required class="form-control">
        </div> 
        <div class="mb-3 position-relative">
          <label for="edad">Edad</label>
          <input type="text" name="edad" id="edad" required class="form-control">
        </div> 
        <div class="mb-3 position-relative">
          <label for="direccion">Direccion</label>
          <input type="text" name="direccion" id="direccion" required class="form-control">
        </div>

        <div class="mb-3 position-relative">
          <div class="form-check">
            <h4>Nivel de Estudios</h4>
            <label for="" class="form-check-label">No tiene estudios</label>
            <input type="radio" value="no" name="opcion" class="form-check-input" required>
          </div>
          <div class="form-check">
            <label for="" class="form-check-label">Estudios primarios</label>
            <input type="radio" value="primario" name="opcion" class="form-check-input" required>
          </div>
          <div class="form-check">
            <label for="" class="form-check-label">Estudios secundarios</label>
            <input type="radio" value="secundario" name="opcion" class="form-check-input" required>
          </div>
        </div>

        <div class="mb-3 position-relative">
          <select name="genero" id="genero" class="form-select" required>
            <option value="" disabled selected>Seleccione sexo</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
          </select>
        </div>

        <div class="mb-3">
          <h4>¿Que deportes practicas?</h4>
          <div class="row">
            <div class="mb-3 form-check col">
              <label for="">Futbol</label>
              <input type="checkbox" value="Futbol" name="deporte[]">
            </div>
            <div class="mb-3 form-check col">
              <label for="">Basket</label>
              <input type="checkbox" value="Basket" name="deporte[]">
            </div>
            <div class="mb-3 form-check col">
              <label for="">Tennis</label>
              <input type="checkbox" value="Tennis" name="deporte[]">
            </div>
            <div class="mb-3 form-check col">
              <label for="">Voley</label>
              <input type="checkbox" value="Voley" name="deporte[]">
            </div>
          </div>

        </div>
        <input type="submit">
        
      </form>
    </div>

  </main>
  <script src="../../js/validacion.js"></script>

<?php include_once '../../estructura/pie.php' ?>