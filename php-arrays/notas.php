<?php

$notas =[
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

krsort($notas); // ordem alfabética decrescente (pelas chaves);
// ukrsort($notas); // mesma funcionalidade do USORT, onde é passado um parâmetro que irá ensinar a formad e ordenar
// ksort($notas) OU krsort; //fará a ordenação por meio das chaves, por este motivo o "k" no início do método, remetendo a "key"
// asort($notas) OU arsort($notas); // utilizando o "a" de associative para manter as chaves definidas no array e não perdê-las posteriormente;
// rsort($notas); // rsort -> faz a mesma coisa que o SORT porém, ao contrário; TODA vez que possuir o "r" será ao contrário do SORT normal;
var_dump($notas);

if (is_array($notas)){ // fará um Check se é a variável é um array (mais utilizado por códigos mais antigos);
    echo 'Sim, é um array!' . PHP_EOL;
}

var_dump(array_is_list($notas)); // essa funcionalidade irá verificar por meio das chaves dos arrays se é uma lista (sequencial);
// neste caso iremos passar o parâmetro 'Vinícius' e o array '$notas' para checagemyj;
var_dump(array_key_exists('Vinicius', $notas)); // é uma funcionalidade que irá verificar se determinado parâmetro está contido em determinado array

echo 'Vinicius fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Ana'])); // verifica se o parâmetro existe e se está setado algum valor (diferente de nulo), mesmo existindo o parâmetro, se não tiver valor setado, se torna "inutilizável"

/*      ==> DIFERENÇA DE "array_key_exists" E "isset" <==

no array_key_exists checamos se o parâmetro informado como CHAVE está contido no array, assim, mesmo sendo
um valor nulo, se o parâmetro existir no array irá retornar "TRUE";

no isset têm-se que o parâmetro CHAVE possa existir no array, porém, caso o parâmetro não esteja definido
com valor, ou que não possua valor (NULO), esse parâmetro passa a ser considerado "inexistente" por hora,
sendo assim, obtendo um retorno "FALSE"; */


echo 'Alguém tirou 10?' . PHP_EOL;
// neste caso iremos passar o valor "10" e o array "$notas" para que seja realizada a checagem;
var_dump(in_array(10, $notas)); // funcionalidade "in_array", onde fará a checagem se há determinado valor em determinado array

/* var_dump(in_array(10, $notas, true)); - passando como "TRUE" a retrição, assim, fazendo com que a
funcionalidade busque um valor estritamente idêntico ao valor passado (10) - independentemente se é string ou não, ele vai buscar o valor passado,
se é informado um inteiro, irá restritamente procurar um inteiro, se é passado string, irá restritamente procurar string;
*/

/*              ==> RESUMO <==

array_key_exists => verifica se a CHAVE existe;
in_array => verifica se o VALOR exite;
isset => verifica se a chave existe e NÃO é NULA; */

echo 'Quem tirou 10?' . PHP_EOL;

// Deste modo temos também o "modo retrito", assim, passando "TRUE" para que procure RESTRITAMENTE o valor que foi informado na funcionalidade, juntamente com o array;
echo  array_search(10, $notas, true); // retornará a chave OU retornará FALSE (caso erro, ou caso não encontre) - assim, não trazendo o "TRUE" conforme as demais funcionalidades


