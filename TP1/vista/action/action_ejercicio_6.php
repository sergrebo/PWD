<?php 
include_once '../../control/Saludo.php';
include_once '../../control/Estudios.php';
include_once '../../control/Deportes.php';

if ($_POST) {
  print_r($_POST);
  $objSaludo = new Saludo();
  $saludo = $objSaludo->saludar($_POST);

  $objEstudios = new Estudios();
  $estudios = $objEstudios->mostrarEstudios($_POST['edad'], $_POST['estudios']);
  
  $genero = 'Mi genero es ' . $_POST['sexo'];

  $objDeportes = new Deportes();
  $deportes = $objDeportes->contarDeportes($_POST);

} else {
  echo "No se recibieron datos";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Presentación</title>
</head>

<body>
  <main>
    <h1>Ejercicio 5 - Resultado</h1>
    <p><?php echo $saludo ?></p>
    <p><?php echo $estudios ?></p>
    <p><?php echo $genero ?></p>
    <p><?php echo $deportes ?></p>
  </main>
</body>

</html>
?>