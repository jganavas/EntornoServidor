<?php

function sumarDigitos($num){
    $sum = 0;
    $digito = 0;
    
    while($num != 0){
        $digito = $num % 10;
        $sum += $digito;
        $num /= 10;
    }
    return $sum;
}

echo sumarDigitos(245);
