<?php
require_once __DIR__ . '/bootstrap_test.php';

use TPfinal\Modelos\Usuario;
use TPfinal\Modelos\Rol;
use TPfinal\Modelos\Producto;
use TPfinal\Modelos\Compra;
use TPfinal\Modelos\Compraestado;
use TPfinal\Modelos\Compraestadotipo;
use TPfinal\Modelos\Compraitem;
use TPfinal\Modelos\Menu;

echo "Probando modelos...\n";

try {
    // Usuario
    $usuariosCount = Usuario::count();
    echo "Usuarios: $usuariosCount\n";
    if ($usuariosCount > 0) {
        $usuario = Usuario::first();
        echo " - Primer usuario: " . $usuario->usnombre . "\n";
        echo " - Roles: " . $usuario->roles->count() . "\n";
    }

    // Rol
    $rolesCount = Rol::count();
    echo "Roles: $rolesCount\n";
    if ($rolesCount > 0) {
        echo " - Primer rol: " . Rol::first()->rodescripcion . "\n";
    }

    // Producto
    $productosCount = Producto::count();
    echo "Productos: $productosCount\n";
    if ($productosCount > 0) {
        echo " - Primer producto: " . Producto::first()->pronombre . "\n";
    }

    // Compra
    $comprasCount = Compra::count();
    echo "Compras: $comprasCount\n";
    if ($comprasCount > 0) {
        echo " - Primera compra ID: " . Compra::first()->idcompra . "\n";
    }

    // Compraestado
    $compraEstadosCount = Compraestado::count();
    echo "CompraEstados: $compraEstadosCount\n";

    // Compraestadotipo
    $compraEstadoTiposCount = Compraestadotipo::count();
    echo "CompraEstadoTipos: $compraEstadoTiposCount\n";
    if ($compraEstadoTiposCount > 0) {
        echo " - Primer tipo estado: " . Compraestadotipo::first()->cetdescripcion . "\n";
    }

    // Compraitem
    $compraItemsCount = Compraitem::count();
    echo "CompraItems: $compraItemsCount\n";

    // Menu
    $menusCount = Menu::count();
    echo "Menus: $menusCount\n";
    if ($menusCount > 0) {
        echo " - Primer menu: " . Menu::first()->menombre . "\n";
    }

} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
