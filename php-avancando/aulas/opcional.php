<?php

$carros = [
    'LMS-2312' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'JGW-3434' => [ // 'JGW-3434' é o índice, devemos defini-lo!
        'marca' => 'VW', // '=>' significa associação!
        'modelo' => 'Gol G4'
    ]
];

$carros ['ABC-1234'] = [
    'marca' => 'Ford',
    'modelo' => 'Fusion'
];

foreach ($carros as $placa => $carro) {
    echo $placa . " ". $carro['modelo'] .' [ ' . $carro['marca'] . ' ] '. PHP_EOL;
}
