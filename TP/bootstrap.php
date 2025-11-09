<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager;

// Definimos la configuración para el driver de base de datos que usemos (MySQL en este caso).
$config = [
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'bdautenticacion',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
];

// La clase `Manager` se encarga de todo, así que la creamos y usamos `addConnection` para pasarle la configuración y seleccionar el driver.
$capsule = new Manager();

$capsule->addConnection($config, 'mysql');

// Hacemos que la instancia de Manager esté disponible globalmente
$capsule->setAsGlobal();

// Inicializamos `bootEloquent` para poder usar `Models` globalmente.
$capsule->bootEloquent();

// Configuramos la conexión predeterminada para el administrador de bases de datos subyacente.
$capsule->getDatabaseManager()->setDefaultConnection('mysql');