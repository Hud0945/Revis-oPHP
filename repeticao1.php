<?php

$tabuada = $_REQUEST['tabuada'];
for ($i =0; $i <= 9; $i++) {
    $resultado = $tabuada * $i;
    echo "$tabuada x $i = $resultado";
    echo "<br>";
}
?>