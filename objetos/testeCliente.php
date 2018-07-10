<?php

require_once './classes/Pessoa.class.php';
require_once 'classes/Cliente.class.php';

$cliente = new Cliente();


$cliente->setNome('Luan');
$cliente->setCpf('123.123.123-12');
$cliente->setIdade(23);
$cliente->setSexo('m');

echo $cliente->getNome();
