<?php

namespace Alura\Banco\Service;

use Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticador, string $senha): void
    {
        if ($autenticador->podeAutenticar($senha)) {
            echo "Ok. Usuário logado no sistema";
        } else {
         echo "Ops. Senha incorreta.";
        }
    }
}