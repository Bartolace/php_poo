<?php

namespace Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario
{
    function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }
}