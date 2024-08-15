<?php
$datos = [
    'Nombre' => 'Sergio',
    'Apellido' => 'Rebolledo',
    'Edad' => 35,
    'Dirección' => 'Francisco Berola 742'
];
foreach ($datos as $dato => $valor) {
    echo $dato. ": ". $valor. "\n";
}
?>