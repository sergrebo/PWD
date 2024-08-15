<?php
$semana = [
    'lunes' => [
        'PWD' => 0,
        'DG' => 0,
    ],
    'martes' => [
        'PWD' => 0,
        'DG' => 4,
    ],
    'miercoles' => [
        'PWD' => 0,
        'DG' => 0,
    ],
    'jueves' => [
        'PWD' => 3,
        'DG' => 0,
    ],
    'viernes' => [
        'PWD' => 3,
        'DG' => 0,
    ]
];
foreach ($semana as $dia) {
    foreach ($dia as $materia => $carga) {
        echo 'Carga horaria del '. $dia[$dia]. ": ". $materia. ': '. $carga. ' horas'. "\n";
    }
}

?>