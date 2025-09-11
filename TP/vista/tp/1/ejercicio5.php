<?php include_once '../../estructura/cabecera-retorno.php' ?>

<h1>Ejercicio N°5</h1>
<h3>Consigna</h3>
<p>Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios. Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo.</p>
<form action="./action_ej5.php" method="get">
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
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" required>
  </div>
  <br>
  <div>
    <div>
      <h5>Nivel de Estudios</h5>
      <label for="nivel">No tiene estudios</label>
      <input type="radio" value="no" name="opcion" required><br>

      <label for="">Estudios primarios</label>
      <input type="radio" value="primario" name="opcion" required><br>

      <label for="">Estudios secundarios</label>
      <input type="radio" value="secundario" name="opcion" required><br>
    </div>
    <br>
    <div>
      <h5>Sexo</h5>
      <select name="sexo" id="sexo" required>
        <option value="" disabled selected>Seleccione sexo</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
      </select>
    </div>
    <br>
    <input type="submit">
  </div>
</form>

<?php include_once '../../estructura/pie.php' ?>