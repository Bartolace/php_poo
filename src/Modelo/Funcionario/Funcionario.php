<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;


abstract class Funcionario extends Pessoa
{
    private $cargo;
    protected $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    function calculaBonificacao(): float {
        return $this->salario * 0.1;
    }

    public function recebeAumento(float $valorAumento): void{
        if($valorAumento < 0) {
            echo "Valor aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }
}