<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente , Diretor};


$umDesenvolvedor = new Desenvolvedor(
    'Gabriel',
    new CPF('123.456.789-10'),
    'Desenvolvedor PHP',
    1000
);

$diretor = new Diretor(
    'Erick',
    new CPF('123.456.789-10'),
    'Diretor PHP',
    1000
);

$gerente = new Gerente(
  'Maria',
  new CPF('123.456.789-10'),
  'Gerente PHP',
  1000
);


$controlaBonificacao = new ControladorDeBonificacao();
$controlaBonificacao->adicionaBonificacaoDe($umDesenvolvedor);
$controlaBonificacao->adicionaBonificacaoDe($gerente);
$controlaBonificacao->adicionaBonificacaoDe($diretor);

print_r($controlaBonificacao->retornaTotalBonificacao());



