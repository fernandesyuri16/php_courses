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
  if ($nota1['nota'] > $nota2['nota']){ // se o primeiro parâmetro tiver que vir primeiro irá retornar -1
    return -1;
  }
  if ($nota2['nota'] > $nota1['nota'] ){ // se o segundo parâmetro tiver que vir primeiro irá retornar 1
      return 1;
  }
      return 0; // se os parâmetros forem iguais retornará 0
};

// passando função por parâmetro utilizasse uma string com o nome da função, assim o PHP irá entender que está se referindo à uma função;
usort($notas, 'ordenaNotas'); // User Sort - ordenação que o User irá ensinar, no caso nós;
// usort espera dois parâmetros: um array a ser ordenado - uma função que ensinará a forma de ordenar
var_dump($notas);
