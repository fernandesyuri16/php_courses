<?php

$dados = ['Vinicius', 10, 24];

//criar novas variaveis baseado no que tá do lado direito
//seguido por sequência
[$nome, $nota, $idade] = $dados;


$dados1 = [
    'nome' => 'Yuri',
    'nota' => 10,
    'idade' => 20
];

//criar novas variaveis baseando no que está do lado direito
//seguido por sequencia
// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados1;

// percorre o array e transforma em variáveis
extract($dados);

//cria um array compactando variáveis
var_dump(compact('nome', 'nota', 'idade'));


