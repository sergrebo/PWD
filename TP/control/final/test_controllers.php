<?php
// test_controllers.php

include_once '../../bootstrap_test.php';

use TPfinal\Controladores\AbmUsuario;
use TPfinal\Controladores\AbmCompra;
use TPfinal\Controladores\AbmCompraestado;
use TPfinal\Controladores\AbmCompraestadotipo;
use TPfinal\Controladores\AbmCompraitem;
use TPfinal\Controladores\AbmMenu;
use TPfinal\Controladores\AbmProducto;
use TPfinal\Controladores\AbmRol;

echo "Testing Controllers...\n";

// 1. AbmUsuario
echo "Testing AbmUsuario... ";
try {
    $abmUsuario = new AbmUsuario();
    $usuarios = $abmUsuario->buscar([]);
    echo "OK (Found " . count($usuarios) . " records)\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 2. AbmCompra
echo "Testing AbmCompra... ";
try {
    $abmCompra = new AbmCompra();
    $compras = $abmCompra->buscar([]);
    echo "OK (Found " . count($compras) . " records)\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 3. AbmCompraestado
echo "Testing AbmCompraestado... ";
try {
    $abmCompraestado = new AbmCompraestado();
    $compraestados = $abmCompraestado->buscar([]);
    echo "OK (Found " . count($compraestados) . " records)\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 4. AbmCompraestadotipo
echo "Testing AbmCompraestadotipo... ";
try {
    $abmCompraestadotipo = new AbmCompraestadotipo();
    $compraestadotipos = $abmCompraestadotipo->buscar([]);
    echo "OK (Found " . count($compraestadotipos) . " records)\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 5. AbmCompraitem
echo "Testing AbmCompraitem... ";
try {
    $abmCompraitem = new AbmCompraitem();
    $compraitems = $abmCompraitem->buscar([]);
    echo "OK (Found " . count($compraitems) . " records)\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 6. AbmMenu
echo "Testing AbmMenu... ";
try {
    $abmMenu = new AbmMenu();
    $menus = $abmMenu->buscar([]);
    echo "OK (Found " . count($menus) . " records)\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 7. AbmProducto
echo "Testing AbmProducto... ";
try {
    $abmProducto = new AbmProducto();
    $productos = $abmProducto->buscar([]);
    echo "OK (Found " . count($productos) . " records)\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 8. AbmRol
echo "Testing AbmRol... ";
try {
    $abmRol = new AbmRol();
    $roles = $abmRol->buscar([]);
    echo "OK (Found " . count($roles) . " records)\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

echo "Testing Complete.\n";
