<?php include_once '../../estructura/cabecera-retorno.php' ?>

  <h1>Ejercicio N°4</h1>
  <h3>Consigna</h3>
  <p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18). Enviar los datos usando el método GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes.</p>
  <form action="./action_ej4.php" method="get">
    <div>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" required pattern="[A-Za-z]+" title="El campo solo puede ser completado con letras.">
    </div>
    <div>
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" id="apellido" required pattern="[A-Za-z]+" title="El campo solo puede ser completado con letras.">
    </div> 
    <div>
      <label for="edad">Edad</label>
      <input type="number" name="edad" id="edad" required min="0">
    </div> 
    <div>
      <label for="direccion">Dirección</label>
      <input type="text" name="direccion" id="direccion" required>
    </div>
    <div>
      <input type="submit">
    </div>
  </form>

<?php include_once '../../estructura/pie.php' ?>