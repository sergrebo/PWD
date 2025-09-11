<?php include_once '../../estructura/cabecera-retorno.php' ?>

  <div class="container mt-4">
    <h1 class="mt-4 text-center">Ejercicio N°8</h1>
    <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente. Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar.</p>
    <div class="col-4 mx-auto">
      <form action="./action_ej1-8.php" method="post" id="formulario" class="needs-validation" novalidate>
        <div class="mb-3 position-relative">
          <label for="edad" class="form-label">Edad</label>
          <input type="text" name="edad" id="edad" required class="form-control">
        </div> 
        <div class="mb-3">
          <h4>¿Sos estudiante?</h4>
          <div class="mb-3 col-3 row position-relative">
            <div class="form-check col">
              <label for="">Si</label>
              <input type="radio" value="SI" name="estudiante">
            </div>
            <div class="form-check col">
              <label for="nivel">No</label>
              <input type="radio" value="NO" name="estudiante">
            </div>
          </div>
          <input type="submit" class="btn btn-primary mb-4">
        </div>
      </form>
    </div>
  </div>
  <script src="../../js/validacion.js"></script>

<?php include_once '../../estructura/pie.php' ?>