<?php

class Vendedor  extends Pessoa {
    private $matricula;
    private $salario;

    function __construct($nome, $idade, $sexo, $matricula , $salario) {
        parent::__construct($nome, $sexo, $idade);
        $this->setMatricula($matricula);
        $this->setSalario($salario);
    }

    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    function setSalrio($salario) {
        $this->salario = $salario;
    }

    function getMatricula($matricula){
       return $this->matricula;
    }
        
    function getSalario($salario) {
        return $this->salario;
    }    
          

}