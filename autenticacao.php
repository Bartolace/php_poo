<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$diretor = new Diretor(
    'Gabriel Bartolace',
    new CPF('064.319.861-05'),
    10000
);
$autenticador->tentaLogin($diretor, 1234);



