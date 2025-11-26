<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: http://localhost/PWD/TP/vista/tp/final/paginaSegura.php');
    exit();
}

include_once '../../estructura/cabecera-retorno.php';
?>

<main class="container mt-5">
    <form action="accion/validarLogin.php" id="formLogin" method="post">
        <div class="mb-3">
            <label for="" class="form label">Nombre de usuario</label>
            <input type="text" name="usnombre" id="usnombre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form label">Contraseña</label>
            <input type="password" name="uspass" id="uspass" class="form-control">
        </div>

        <input type="hidden" name="uspasshash" id="passwordHash">

        <input type="submit" value="Iniciar sesión" class="btn btn-primary">
    </form>
</main>

<script src="../../js/md5.js"></script>
<script src="../../js/login_handler.js"></script>

<?php include_once '../../estructura/pie.php'; ?>