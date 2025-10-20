<?php

function darDatosSubmitted(){
    $datos = [];
    foreach($_GET as $key => $value){
        $datos[$key] = $value;
    }
    foreach($_POST as $key => $value){
        $datos[$key] = $value;
    }
    foreach($_FILES as $key => $value){
        //print_r($_FILES);
        $datos[$key] = $value;
    }
    return $datos;
}

function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}

function autoloader($class_name){
    $directorys = array(
        $_SESSION['ROOT'] . 'modelo/4/',
        $_SESSION['ROOT'] . 'modelo/4/conector/',
        $_SESSION['ROOT'] . 'control/4/',
        $_SESSION['ROOT'] . 'modelo/libreria/',
        $_SESSION['ROOT'] . 'control/libreria/',
    );
    foreach ($directorys as $directory) {
        if (file_exists($directory . $class_name . '.php')) {
            require_once($directory . $class_name . '.php');
            return;
        }
    };
}

spl_autoload_register('autoloader');