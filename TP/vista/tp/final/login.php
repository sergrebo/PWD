<?php
session_start();

if (isset($_SESSION['usuario'])) {
    // TEMPORAL - El redireccionamiento debe corregirse.
    header('Location: http://localhost/PWD/TP/vista/tp/final/listarUsuario.php');
    exit();
}

include_once '../../estructura/cabecera-retorno.php';
?>

<main class="container mt-5">
    <form action="accion/validarLogin.php" id="formLogin" method="post">
        <div class="mb-3">
            <input name="usnombre" id="usnombre" class="easyui-textbox" data-options="prompt: 'Ingrese su nombre de usuario', iconCls: 'icon-man'">
        </div>
        <div class="mb-3">
            <input name="uspass" id="uspass" class="easyui-passwordbox" data-options="prompt: 'Ingrese su contraseña'">
        </div>

        <input type="hidden" name="uspasshash" id="passwordHash">

        <input type="submit" value="Iniciar sesión" class="">
    </form>
</main>

<script src="../../js/md5.js"></script>
<script src="../../js/login_handler.js"></script>

<?php include_once '../../estructura/pie.php'; ?>