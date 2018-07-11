<pre>

<?php

require_once 'classe/Conta.class.php';
require_once 'classe/Cliente.class.php';

$contaRafa = new Conta();

$contaRafa->setAgencia('1234');
$contaRafa->setNumero('999854-7');
$contaRafa->setSaldo(1350.78);

$rafael = new Cliente();
$rafael->setNome('Rafael');
$rafael->setEmail('rafaelboy@gmail.com');

$contaRafa->setCliente($rafael);

var_dump($contaRafa);

?>
</pre>