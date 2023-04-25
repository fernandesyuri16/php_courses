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

function ordenaNotas(array $nota1, array $nota2) : int // fará uma ordenação de forma Decrescente;
{
    return $nota2['nota'] <=> $nota1['nota']; // "operador de espaçonave", é usado para métodos como este, deste modo acontecendo da mesma forma que antes
}
// passando função por parâmetro utilizasse uma string com o nome da função, assim o PHP irá entender que está se referindo à uma função;
usort($notas, 'ordenaNotas'); // User Sort - ordenação que o User irá ensinar, no caso nós;
// usort espera dois parâmetros: um array a ser ordenado - uma função que ensinará a forma de ordenar
var_dump($notas);
