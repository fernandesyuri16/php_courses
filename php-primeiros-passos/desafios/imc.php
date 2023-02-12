<?php

$peso = 80;
$altura = 1.80;

$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc" . PHP_EOL . "Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    "acima";
}

echo " do recomendado";