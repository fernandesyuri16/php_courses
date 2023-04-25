<?php

$alunos2021 =[
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patrícia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];

//usado para adicionar vários elementos no array
array_push($alunos2022, 'Clarice', 'Bob', 'Charlie');

//usado caso queira inserir apenas um elemento no array
$alunos2022[] = 'Luiz';

//add elemento no inicio do array
array_unshift($alunos2022,'Stephane', 'Rayssa') . PHP_EOL;

//pega o primeiro elemento do array
echo array_shift($alunos2022) . PHP_EOL;

//pega o ultimo elemento do array
echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);