<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente , Diretor, EditorVideo};


$umDesenvolvedor = new Desenvolvedor(
    'Gabriel',
    new CPF('123.456.789-10'),
    1000
);

$diretor = new Diretor(
    'Erick',
    new CPF('123.456.789-10'),
    1000
);

$gerente = new Gerente(
  'Maria',
  new CPF('123.456.789-10'),
  1000
);

$editor = new EditorVideo(
  'Vinicius',
  new CPF('123.456.789-10'),
  1000
);

$controlaBonificacao = new ControladorDeBonificacao();
$controlaBonificacao->adicionaBonificacaoDe($umDesenvolvedor);
$controlaBonificacao->adicionaBonificacaoDe($gerente);
$controlaBonificacao->adicionaBonificacaoDe($diretor);
$controlaBonificacao->adicionaBonificacaoDe($editor);

print_r($controlaBonificacao->retornaTotalBonificacao());



 