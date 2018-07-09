<?php

require_once 'Lampada.php';

$lampada = new Lampada();   

$lampada->setPotencia(50);

$lampada->liga();

echo $lampada;