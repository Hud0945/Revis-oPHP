<?php

$tabuada = $_REQUEST['tabuada'];
for ($i = 0; $i <= 10; $i++) {
    $resultado = $tabuada * $i;
    echo "$tabuada x $i = $resultado";
    echo "<br>";
}
?>