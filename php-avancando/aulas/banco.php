<?php

require 'funcoes.php'; // para a execução o programa caso não encontre 'funcoes.php' - diferente do include..

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '102.030.405-06' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'], 500
);
$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'], 200
);

$contasCorrentes['102.030.405-06'] = depositar (
    $contasCorrentes['102.030.405-06'], 900
);

unset ($contasCorrentes['123.456.689-11']);

titularComLetrasMaiusculas ($contasCorrentes['102.030.405-06']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco Golz</title>
</head>
<body>
    <h1> Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html> 

