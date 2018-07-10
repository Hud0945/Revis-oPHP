<?php

class Lampada {
    
    private $estado;
    private $potencia;
    private $imgLigada;
    private $imgDesligada;

    function __construct($Desligada, $Ligada) {
        $this->estado = false;
        $this->potencia = 0;
        $this->imgDesligada = $Desligada;
        $this->imgLigada = $Ligada;
    }

    function setPotencia($potencia) {
        if ($potencia >= 0) {
            $this->potencia = $potencia;
        } else {
            $this->potencia = 0;
        }
    }

    function getPotencia() {
        return $this->potencia;
    }

    function getEstado() {
        return $this->estado;
    }

    function getImagem() {
        if($this->estado) {
            return $this->imgLigada;
        } else {
            return $this->imgDesligada;
        }
    }

    function liga () {
         $this->estado = true;
    }
    
    function desliga () {
         $this->estado = false;
    }
    
    function __toString() {
        return "Lampada {potencia={$this->potencia}, estado={ $this->estado}}";
    }

}
