<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$diretor = new Diretor(
    'Gabriel Bartolace',
    new CPF('064.319.861-05'),
    10000
);

$editorDeVideo = new EditorVideo(
    'Gil Aberto',
    new CPF('064.319.861-05'),
    1000
);
$autenticador->tentaLogin($editorDeVideo, 'abcd');
$autenticador->tentaLogin($diretor, 1234);



