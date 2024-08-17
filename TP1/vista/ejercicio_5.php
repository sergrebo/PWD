<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>

<body>
  <main>
    <h1>Ejercicio 5</h1>
    <p>
      Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
      “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
      estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
      apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
      un mensaje que indique el tipo de estudios que posee y su sexo.
    </p>

    <form action="./action/action_ejercicio_5.php" method="get">
      <div>
        <label for="nombre">Nombre </label><input type="text" name="nombre" id="nombre">
      </div>
      <div>
        <label for="apellido">Apellido </label><input type="text" name="apellido" id="apellido">
      </div>
      <div>
        <label for="edad">Edad </label><input type="number" name="edad" id="edad">
      </div>
      <div>
        <label for="direccion">Dirección </label><input type="text" name="direccion" id="direccion">
      </div>
      <div>
        <p>Nivel de estudios</p>
        <input type="radio" name="estudios" id="no" value="no"><label for="no"> No tiene estudios</label>
        <input type="radio" name="estudios" id="primario" value="primario"><label for="primario"> Estudios primarios</label>
        <input type="radio" name="estudios" id="secundario" value="secundario"><label for="secundario"> Estudios secundarios</label>
      </div>
      <div>
        <p>Sexo</p>
        <input type="radio" name="sexo" id="femenino" value="femenino"><label for="femenino"> Femenino</label>
        <input type="radio" name="sexo" id="masculino" value="masculino"><label for="masculino"> Masculino</label>
      </div>
      <div>
        <input type="submit" value="Enviar">
      </div>
    </form>
  </main>

</body>

</html>