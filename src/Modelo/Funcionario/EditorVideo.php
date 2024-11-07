<?php

namespace Alura\Banco\Modelo\Funcionario;


use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class EditorVideo extends Funcionario implements Autenticavel
{

    public function calculaBonificacao(): float{
        return 600.0;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}