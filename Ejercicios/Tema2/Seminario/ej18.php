<?php
function esPrimo($num){
    return (($num > 1) && ($num % $num == 0) && ($num % 1 == 0));
}

$res = esPrimo(3) ? "Es primo" : "No es primo";
echo $res;