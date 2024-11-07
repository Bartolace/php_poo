<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticador, string $senha): void
    {
        if ($autenticador->podeAutenticar($senha)) {
            echo "Ok. Usuário logado no sistema" . PHP_EOL;
        } else {
         echo "Ops. Senha incorreta.";
        }
    }
}