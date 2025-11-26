<?php
// bootstrap_test.php

// Mock $_SERVER variables for CLI
$_SERVER['DOCUMENT_ROOT'] = '/opt/lampp/htdocs';
if (!isset($_SERVER['HTTP_HOST'])) {
    $_SERVER['HTTP_HOST'] = 'localhost';
}

// Include configuration
include_once 'configuracion.php';

// Include Composer autoloader
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

// Setup Eloquent
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'bdcarritocompras',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
