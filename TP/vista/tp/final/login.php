<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: http://localhost/PWD/TP/vista/tp/final/paginaSegura.php');
    exit();
}

include_once '../../estructura/cabecera-retorno.php';
?>

<main class="container mt-5">
    <form action="accion/validarLogin.php" method="post">
        <div class="mb-3">
            <label for="" class="form label">Nombre de usuario</label>
            <input type="text" name="usnombre" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form label">Contraseña</label>
            <input type="password" name="uspass" id="" class="form-control">
        </div>
        <input type="submit" value="Iniciar sesión" class="btn btn-primary">
    </form>
</main>

<?php include_once '../../estructura/pie.php'; ?>
