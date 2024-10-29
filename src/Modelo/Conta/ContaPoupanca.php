<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

    public function recuperaTarifa(): float
    {
        return 0.03;
    }
}