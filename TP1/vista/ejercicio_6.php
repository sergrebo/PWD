<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Presentación</title>
</head>

<body>
  <main>
    <h1>Ejercicio 6</h1>
    <p>
      Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
      deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
      que procesa el formulario la cantidad de deportes que practica.
    </p>

    <form action="./action/action_ejercicio_6.php" method="post">
      <div>
        <label for="nombre">Nombre </label><input type="text" name="nombre" id="nombre" required>
      </div>
      <div>
        <label for="apellido">Apellido </label><input type="text" name="apellido" id="apellido" required>
      </div>
      <div>
        <label for="edad">Edad </label><input type="number" name="edad" id="edad" required>
      </div>
      <div>
        <label for="direccion">Dirección </label><input type="text" name="direccion" id="direccion" required>
      </div>
      <div>
        <fieldset>
          <legend>Nivel de estudios</legend>
          <input type="radio" name="estudios" id="no" value="no" required><label for="no"> No tiene estudios</label>
          <input type="radio" name="estudios" id="primario" value="primario" required><label for="primario"> Estudios primarios</label>
          <input type="radio" name="estudios" id="secundario" value="secundario" required><label for="secundario"> Estudios secundarios</label>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <legend>Sexo</legend>
          <input type="radio" name="sexo" id="femenino" value="femenino" required><label for="femenino"> Femenino</label>
          <input type="radio" name="sexo" id="masculino" value="masculino" required><label for="masculino"> Masculino</label>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <legend>Deportes</legend>
          <input type="checkbox" name="futbol" id="futbol" value="futbol"><label for="futbol"> Futbol</label>
          <input type="checkbox" name="basket" id="basket" value="basket"><label for="basket"> Basket</label>
          <input type="checkbox" name="tenis" id="tenis" value="tenis"><label for="tenis"> Tenis</label>
          <input type="checkbox" name="voley" id="voley" value="voley"><label for="voley"> Voley</label>
        </fieldset>
      </div>
      <div>
        <input type="submit" value="Enviar">
      </div>
    </form>
  </main>

</body>

</html>