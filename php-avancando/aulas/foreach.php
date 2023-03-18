<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '321.654.987-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '102.030.405-06' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes [] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " ". $conta['titular'] . PHP_EOL;
}
