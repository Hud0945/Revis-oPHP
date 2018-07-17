<?php

require_once 'Conta.class.php';

class ContaCorrente extends Conta {
    
    private static $qtdContas = 0;

    private $limite = 0;

    private const TAXA = 0.50;

    public function __construct() {
        self::$qtdContas++;
    }
    
    public function getLimite() {
        return $this->limite;
    }
    public function setLimite($limite) {
        $this->limite = $limite;
    }
    public function saca($valor) {
        $saldoVirtual = parent::getSaldo() + $this->limite + self::TAXA;
        if (is_numeric($valor) && $valor > 0 && $valor <= $saldoVirtual) {
            $novoSaldo = parent::getSaldo() - $valor - self::TAXA;
            parent::setSaldo($novoSaldo);
            return true;
        }
        return false;

        if(!is_numeric($valor)) {
            throw new Exception("Valor dever ser um numero");
        } else if ($valor <= 0) {
            throw new Exception("Valor dever ser maior que ZERO");
        } else if($valor > $saldoVirtual) {
            throw new Exception("saldo INSUFICIENTE");
        } else {
            $novoSaldo = parent::getSaldo() - $valor - self::TAXA;
            parent::setSaldo($novoSaldo);
        }

    }

    public static function getQuantidadeContas() {
        return self::$qtdContas;
    }
}