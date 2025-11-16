<?php  

include_once '../../estructura/cabecera-retorno.php'; 

print_r($_SESSION);
print_r($_COOKIE);
?>

<main class="container mt-5">
  <h4 class="text-center">Página segura</h4>
  <a href="./cerrarSesion.php" class="btn btn-danger">Cerrar sesión</a>
</main>

<?php include_once '../../estructura/pie.php'; ?>