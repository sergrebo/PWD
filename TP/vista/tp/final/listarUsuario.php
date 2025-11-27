<?php
session_start();

require '../../../configuracion.php';

// verEstructura($_SESSION);

include_once '../../estructura/cabecera-retorno.php'; ?>
<nav class="container-fluid">
    <span class="me-2">Bienvenido <?php echo $_SESSION['usuario']['usnombre']; ?></span>
    // Aca hay que hacer funcionar el boton de cerrar sesión con ajax
    <a href="#" id="btnCerrarSesion" class="easyui-linkbutton">Cerrar sesión</a>
</nav>
<main class="container mt-5">
    <table id="dg" title="Usuarios" class="easyui-datagrid" 
            url="get_users.php"
            toolbar="#toolbar"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="idusuario" width="50">ID</th>
                <th field="usnombre" width="50">Nombre</th>
                <th field="usmail" width="50">Correo electrónico</th>
                <th field="usdeshabilitado" width="50">Deshabilitado</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo usuario</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar usuario</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Eliminar usuario</a>
    </div>
</main>



<?php include_once '../../estructura/pie.php'; ?>