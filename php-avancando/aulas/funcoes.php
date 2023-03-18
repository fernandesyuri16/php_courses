<?php


function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar R$ " . $valorASacar . ' Sr(a). ' .$conta['titular'] . '<br>');
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function depositar(array $conta, $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos!");
    }
    return $conta;
}

function titularComLetrasMaiusculas (array &$conta) //normalmente não é utilizado "&";
{
    $conta['titular'] = mb_strtoupper($conta ['titular']);
}
function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular - Saldo: $saldo </li>";
}
