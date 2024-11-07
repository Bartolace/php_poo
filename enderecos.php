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

echo $umEndereco->cidade;
exit();

echo $umEndereco . PHP_EOL;
echo $outroEndereco;

