<?php

require_once './Cliente.class.php';

abstract class Conta {
    private $cliente;
    private $agencia;
    private $numero;
    private $saldo;


    public function setCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function getAgencia() {
        return $this->agencia;
    }

    public function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero() {
        $this->numero = $numero;
    }

    public function getSaldo($saldo) {
        $this->$saldo;
    }

    public function setSaldo() {
        $this->saldo = $saldo;
    }
}   

