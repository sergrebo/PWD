<?php include_once '../../estructura/cabecera-retorno.php' ?>

  <h1>Ejercicio N°7</h1>
  <h3>Consigna</h3>
  <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación.</p>
  <form action="./action_ej7.php" method="get" onsubmit="return validar();">
    <div>
      <input type="number" name="numero1" id="numero1" placeholder="Ingrese un número" required>
    </div>
    <div>
      <input type="number" name="numero2" id="numero2" placeholder="Ingrese un número" required>
    </div>
    <div>
      <select name="Operacion" id="Operacion" required>
        <option value="" disabled selected>Selecciona una Operacion</option>
        <option value="SUMA">SUMA</option>
        <option value="RESTA">RESTA</option>
        <option value="MULTIPLICACION">MULTIPLICACIÓN</option>
        <option value="DIVISION">DIVISÓN</option>
      </select>
    </div>
    <div>
      <input type="submit">
    </div>
  </form>
  <script type="text/javascript">
    function validar(){
      resp = true;
      var operacion = document.getElementById("Operacion").value;
      var divisor = document.getElementById("numero2").value;

      if (operacion == "DIVISION" && divisor == 0) {
        alert("La división por 0 no es posible. Revise los datos y vuelva a intentarlo.")
        resp = false;
      }
      return resp;
    }
  </script>

<?php include_once '../../estructura/pie.php' ?>