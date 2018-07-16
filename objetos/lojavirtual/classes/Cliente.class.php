<?php

class Cliente {
    private $nome;
    private $cpf;
    private $cartao;

    public    function setNome($nome){
        $this->nome = $nome;
    }

    public   function getNome() {
        return $this->Nome;
    }

    public  function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    public  function getCpf() {
        return $this->cpf;
    }
    
    public  function setCartao($cartao) {
        $this->cartao = $cartao;
    }

    public  function getCartao() {
        return $this->cartao;
    }    
}