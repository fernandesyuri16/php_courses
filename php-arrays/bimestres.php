<?php

$notasBimestre1 =[
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 =[

    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];

// se não possuir algum nome de aluno, mas conter o valor da nota, NÃO irá considerar o NOME(chave) e sim o valor!
// var_dump(array_diff($notasBimestre1, $notasBimestre2)); // retorna todos os VALORES (não considerando a chave) que estão diferentes entre um parâmetro informado e outro;
// var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); // retorna todos os CHAVES (não considerando os valores) que estão diferentes entre um parâmetro informado e outro;
// var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); // retorna os valores JUNTAMENTE com suas chaves, assim considerando as DIFERENÇAS de VALORES E CHAVES;

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2); // neste caso criamos uma variável para transmitir apenas os "alunos faltantes" que são os valores retornados da funcionalidade array_diff_key;
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

// var_dump(array_keys($alunosFaltantes)); // irá retornar apenas as chaves de determinado array
// var_dump(array_values($alunosFaltantes)); // irá retornar apenas os valores de determinado array
var_dump(array_combine($nomesAlunos, $notasAlunos)); // irá combinar as notas e os alunos, assim, trazendo o primeiro valor como "chave" e o segundo valor como "value";
var_dump(array_flip($alunosFaltantes)); // troca os parâmetros de lugar, as chaves passam a ser os valores e os valores passam a ser chaves;
