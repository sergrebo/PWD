<?php include_once '../../estructura/cabecera-retorno.php' ?>

<h1>Ejercicio N°1</h1>
<main>
  <div>
    <h3>Consigna</h3>
    <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.</p>
    <form action="./action_ej1.php" method="get">
      <div>
        <label for="numero">Número: </label><br>
        <input type="number" name="numero" id="numero" required><br>
      </div>
      <input type="submit">
    </form>
  </div>
</main>

<?php include_once '../../estructura/pie.php' ?>  