<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Form Saludo</title>
</head>
<body> -->
<?php
  include_once '../../estructura/cabecera-retorno.php';
?>
  <h1>Ejercicio N°8</h1>
  <h3>Consigna</h3>
  <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente. Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar.</p>
  <form action="./action/action_ej8.php" method="post">
    <div>
      <label for="edad">Edad</label>
      <input type="number" name="edad" id="edad" required min="0">
    </div><br>

    <div>
      <div>
        <h4>Es estudiante?</h4>
        <label for="nivel">NO</label>
        <input type="radio" value="NO" name="estudiante" required><br>
        <label for="">SI</label>
        <input type="radio" value="SI" name="estudiante" required>
      </div><br>
          
      <input type="submit">
      <input type="reset" value="Limpiar">
    </div>
  </form>
<!-- </body>
</html> -->
<?php
  include_once '../../estructura/pie.php';
?>