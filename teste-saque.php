<?php

use \Alura\Banco\Modelo\Conta\Conta;
use \Alura\Banco\Modelo\Conta\Titular;
use \Alura\Banco\Modelo\CPF;
use \Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\ContaPoupanca;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Gabriel Bartolace de Freitas',
        new Endereco('Campo Grande', 'Moreninhas', 'Jardim Norte', '378')
    )
);

$conta->deposita(500);

$conta->saca(100);

echo $conta->recuperaSaldo();



