<?php

class Secoes extends Produto {
    private $eletronicos;

    function __construct($televisão, $monitores, $celulares) {
        parent::__construct($televisão, $monitores, $celulares);
        $this->setEletronicos($eletronicos);        
    } 

}

