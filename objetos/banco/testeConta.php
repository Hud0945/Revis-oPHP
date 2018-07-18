<?php

require_once 'classes/Cliente.class.php';
require_once 'classes/ContaCorrente.class.php';
require_once 'classes/ContaPoupanca.class.php';
require_once 'classes/ContaInvestimento.class.php';
require_once 'classes/ContaAcao.class.php';
require_once 'classes/BancoDB.class.php';
?>

<?php

$rafael = new Cliente();
$rafael->setNome('Rafael');
$rafael->setEmail('rafael@gmail.com');
$rafael->setCpf('12312312312');

$contaRafa = new ContaCorrente();
$contaRafa->setCliente($rafael);
$contaRafa->setAgencia('1234');
$contaRafa->setNumero('99854-7');
$contaRafa->setSaldo(1000.0);
$contaRafa->setLimite(500.0);

    $banco = new BancoDB();
    $banco->salva($contaRafa);

?>
<pre> <?php var_dump($banco->listaTodas());?></pre>

