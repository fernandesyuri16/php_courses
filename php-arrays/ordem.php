<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

// boa pratica:
$notasOrdenadas = $notas; // criando uma nova váriável para que quando seja ordenada, não perca a origem da variável
sort($notasOrdenadas); // irá ordenar a váriável de forma CRESCENTE ou ALFABÉTICA crescente);

echo 'Desordenadas: ';
var_dump($notas);

echo 'Ordenadas: ';
var_dump($notasOrdenadas); // exibindo a variável criada para que ela seja modificada em ordem e não se altere a variável principal

// VAR_DUMP -> exibe uma variável contendo seu tipo e sua estrutura (usada para DESENVOLVIMENTO, apenas para entender o que há na variável);
