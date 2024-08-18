<?php 
include_once '../../control/Numero.php';

if ($_GET) {
  //var_dump($_GET);
  $objNumero = new Numero();
  $primero = $objNumero -> esNumerico($_GET['primero']);
  $segundo = $objNumero -> esNumerico($_GET['segundo']);
  if ($primero && $segundo) {
    if ($_GET['operacion'] == 'suma') {
      $resultado = $_GET['primero'] + $_GET['segundo'];
    } elseif ($_GET['operacion'] == 'resta') {
      $resultado = $_GET['primero'] - $_GET['segundo'];
    } else {
      $resultado = $_GET['primero'] * $_GET['segundo'];
    }
  } else {
    $resultado = 'Alguno de los valores ingresados no es numérico';
  }

} else {
  echo 'No se han ingresado datos.';

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Operación matemática</title>
</head>
<body>
  <main>
    <h1>Ejercicio 7 - Resultado</h1>
    <p><?php echo $resultado ?></p>
  </main>
</body>
</html>