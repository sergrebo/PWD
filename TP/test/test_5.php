<?php

require '../bootstrap.php';
require '../modelo/5/Usuario.php';
require '../modelo/5/Rol.php';
require '../modelo/5/UsuarioRol.php';

// Limpio datos previos (opcional, solo para pruebas)
/*
Usuario::truncate();
Rol::truncate();
UsuarioRol::truncate();
*/

// Creo algunos usuarios
$usuarios = [
  Usuario::create(['usnombre' => 'Emi', 'uspass' => '123', 'usmail' => 'emi@mail.com',]),
  Usuario::create(['usnombre' => 'Webox', 'uspass' => 'abc', 'usmail' => 'webox@mail.com']),
  Usuario::create(['usnombre' => 'Neti', 'uspass' => 'xyz', 'usmail' => 'neti@mail.com']),
];

// Creo un par de roles
$roles = [
  Rol::create(['rodescripcion' => 'invitado']),
  Rol::create(['rodescripcion' => 'administrador']),
];

// Asocio roles a usuarios
$usuarios[0]->roles()->attach([$roles[0]->id]);                // Emi → invitado
$usuarios[1]->roles()->attach([$roles[1]->id]);                // Webox → administrador
$usuarios[2]->roles()->attach([$roles[0]->id, $roles[1]->id]); // Neti → invitado + admin

echo "=== RELACIONES DESDE USUARIO ===\n";
foreach ($usuarios as $u) {
    echo "Usuario: {$u->usnombre}\n";
    foreach ($u->roles as $r) {
        echo "  - Rol: {$r->rodescripcion}\n";
    }
    echo "\n";
}

echo "=== RELACIONES DESDE ROL ===\n";
foreach ($roles as $r) {
    echo "Rol: {$r->rodescripcion}\n";
    foreach ($r->usuarios as $u) {
        echo "  - Usuario: {$u->usnombre}\n";
    }
    echo "\n";
}