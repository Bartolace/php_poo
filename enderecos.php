<?php

use Alura\Banco\Modelo\Endereco;

require_once './autoload.php';



$umEndereco = new Endereco(
    'Campo Grande',
    'Moreninhas',
    'R. Ipamerim',
    '378',
);

$outroEndereco = new Endereco(
    'São Paulo',
    'Liberdade',
    'R. exemplo',
    '378',
);

$umEndereco->__set('cidade', 'cidade set teste');

//usando __get
echo $umEndereco->cidade. PHP_EOL;
//Aplicando o __toString
echo $umEndereco . PHP_EOL;
echo $outroEndereco;

