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
    <h1 class="mt-4 text-center">Ejercicio N°8</h1>
    <form action="./action/action_ej8.php" method="post" class="container">
        <div class="mb-3">
                <label for="edad">Edad</label>
                <input type="number" name="edad" id="edad" required class="form-control">
        </div> 

        <div class="mb-3">
            <div class="mb-3">
                <h3>Es estudiante?</h3>
                <label for="nivel">NO
                <input type="radio" value="NO" name="estudiante"></label>
                <label for="">SI
                    <input type="radio" value="SI" name="estudiante">
                </label>
            </div>
                
            <input type="submit" class="btn btn-primary mb-4">
        </div>
    </form>
<!-- </body>
</html> -->
<?php
    include_once '../../estructura/pie.php';
?>