<?php include_once '../../estructura/cabecera-retorno.php' ?>

<h1>Ejercicio N°3</h1>
<h3>Consigna</h3>
<p>Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre apellido tengo edad años y vivo en dirección”, usando la información recibida. Cambiar el método Post por Get y analizar las diferencias</p> 
<form action="./action_ej3.php" method="post">
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