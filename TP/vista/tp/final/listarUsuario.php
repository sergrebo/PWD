<?php
session_start();

require '../../../configuracion.php';

// verEstructura($_SESSION);

include_once '../../estructura/cabecera-retorno.php'; ?>
<nav class="container-fluid bg-body-secondary shadow-sm">
    <div class="my-2">
        <span class="me-2">Bienvenido <strong><?php echo $_SESSION['usuario']['usnombre']; ?></strong></span>
        <a href="cerrarSesion.php" id="btnCerrarSesion" class="btn btn-outline-danger btn-sm">Cerrar sesión</a>
    </div>
</nav>
<main class="container mt-4">
    <table id="dg" title="Usuarios" class="easyui-datagrid" url="get_users.php" toolbar="#toolbar" rownumbers="true"
        fitColumns="true" singleSelect="true">
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
        <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Eliminar
            usuario</a>
    </div>

    <div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px" closed="true"
        buttons="#dlg-buttons">
        <div class="ftitle">Información del usuario</div>
        <form id="fm" method="post" novalidate>
            <div class="fitem">
                <label>Nombre de usuario:</label>
                <input name="usnombre" class="easyui-textbox" required="true">
            </div>
            <div class="fitem">
                <label>Contraseña:</label>
                <input name="uspass" class="easyui-passwordbox" required="true" id="uspass">
            </div>
            <div class="fitem">
                <label>Correo electrónico:</label>
                <input name="usmail" class="easyui-textbox" validType="email" required="true">
            </div>
            <div class="fitem">
                <label>Habilitación:</label>
                <input name="usdeshabilitado" class="easyui-datetimebox">
            </div>
            <input type="hidden" name="uspasshash" id="passwordHash">
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()"
            style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel"
            onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
    </div>
</main>

<script src="../../js/md5.js"></script>
<script>
    /**
     * Abre el cuadro de diálogo en el cual se imprime el formulario con los campos reseteados para crear un nuevo usuario.
     * La 'url' almacena la dirección URL donde se publicará el formulario cuando se guarden los datos del usuario.
     */
    function newUser() {
        $('#dlg').dialog('open').dialog('setTitle', 'Nuevo usuario');
        $('#fm').form('clear');
        url = 'save_user.php';
    }

    /**
     * Abre el cuadro de diálogo con los campos del formulario cargados con los datos de la fila de la cuadrícula de usuarios seleccionada y asi poder editar los datos del usuario elegido.
     * La 'url' almacena la dirección URL donde se publicará el formulario cuando se guarden los datos del usuario.
     */
    function editUser() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $('#dlg').dialog('open').dialog('setTitle', 'Editar usuario');
            $('#fm').form('load', row);
            url = 'update_user.php?id=' + row.id;
        }
    }

    /**
     * Guarda los datos del usuario, sea para crearlo o editarlo.
     * Antes de enviar el formulario, se llamará la función "onSubmit", que permite validar los valores de los campos del formulario.
     * Una vez enviado correctamente, cierra el cuadro de diálogo y vuelve a cargar los datos de la cuadrícula de datos.
     */
    function saveUser() {
        $('#fm').form('submit', {
            url: url,
            onSubmit: function () {
                // Ejecuto la validación estándar de EasyUI.
                var isValid = $(this).form('validate');

                // Si la validación es exitosa, procedo a hasear.
                if (isValid) {
                    // Obtengo el valor de la contraseña ingresada por el usuario.
                    var plainPassword = $('#uspass').val();

                    // Hasheo la contraseña usando la funcion hex_md5().
                    var hashedPassword = hex_md5(plainPassword);

                    // Asigno el hash al campo oculto.
                    $('#passwordHash').val(hashedPassword);

                    // Limpio y deshabilito el campo de la contraseña.
                    $('#uspass').val('');
                    $('#uspass').textbox('disable');
                }
                // Devuelvo el resultado de la validación original para permitir/detener el envío.
                return isValid;
            },
            success: function (result) {
                var result = eval('(' + result + ')');
                if (result.errorMsg) {
                    $.messager.show({
                        title: 'Error',
                        msg: result.errorMsg
                    });
                } else {
                    $('#dlg').dialog('close');        // cierra el cuadro de diálogo
                    $('#dg').datagrid('reload');      // refresca la tabla de datos
                }
            }
        });
    }

    /**
     * Remueve al usuario seleccionado en la grilla.
     * Antes de eliminar una fila, se mostrará un cuadro de diálogo de confirmación para que el usuario determine si desea eliminar los datos de la fila. Una vez eliminados correctamente, se llama al método "reload" para actualizar la información de la cuadrícula de datos.
     */
    function destroyUser() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $.messager.confirm('Confirm', 'Are you sure you want to destroy this user?', function (r) {
                if (r) {
                    $.post('destroy_user.php', { id: row.id }, function (result) {
                        if (result.success) {
                            $('#dg').datagrid('reload');
                        } else {
                            $.messager.show({
                                title: 'Error',
                                msg: result.msg
                            });
                        }
                    });
                }
            });
        }
    }


</script>



<?php include_once '../../estructura/pie.php'; ?>