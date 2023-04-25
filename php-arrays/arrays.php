<?php

$array = [
    0 => 'um', // hash map; -> estrutura de dados em PHP relacionada a Array, em PHP não há um espaço de memória contínuo, mas sim, um mapa (HASH MAP);
    1 => 'dois', // sempre deverá ser inteiro ou string as chaves dos Arrays;
    2 => 'tres', //um valor booleano sempre vai converter para o número inteiro antes da virgula; (sempre inteiros ou strings como sua chave);
];

$contador = 0;

foreach($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL; // count irá realizar uma contagem da variável e retornar o valor dela;
                // pode ser usado também "sizeof";
