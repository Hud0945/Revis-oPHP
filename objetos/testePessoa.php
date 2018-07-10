<?php

require_once 'classes/Pessoa.class.php';

$pessoa = new Pessoa('Hudson', 'M', 17);

echo "
    Nome: {$pessoa->getNome()},
    Idade: {$pessoa->getIdade()},
    Sexo: {$pessoa->getSexo()}
";