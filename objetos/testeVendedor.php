<?php

require_once 'classes/Pessoa.class.php';
require_once 'classes/Vendedor.class.php';

$luan = new Vendedor('8844', 'luan', 'm', 19, 4500.00);

echo $luan->getIdade();

$fabiano = new Cliente('fabioano', '123456789', 35, 'm', '55555');

echo $fabiano;