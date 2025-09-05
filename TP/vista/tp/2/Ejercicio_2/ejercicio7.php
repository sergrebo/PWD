<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Calculadora</title>
</head>
<body> -->
<?php
        include_once '../../estructura/cabecera-retorno.php';
?>
    <h1 class="mt-4 text-center">Ejercicio N°7</h1>
    <form action="./action/action_ej7.php" method="get" class="container">
        <div class="mb-3">
                <input type="text" name="numero1" id="numeros" placeholder="Ingrese un número" required class="form-control">
        </div>
        <div class="mb-3">
                <input type="text" name="numero2" id="numeros" placeholder="Ingrese un número" required class="form-control">
        </div>
        <div class="mb-3">
                <select name="Operacion" id="Operacion" required>
                        <option value="" disabled selected>Selecciona una Operacion</option>
                        <option value="SUMA">SUMA</option>
                        <option value="RESTA">RESTA</option>
                        <option value="MULTIPLICACION">MULTIPLICACION</option>
                </select>
        </div>
        <div class="mb-3">
                <input type="submit" class="btn btn-primary mb-4">
        </div>
    </form>
<!-- </body>
</html> -->
<?php
    include_once '../../estructura/pie.php';
?>