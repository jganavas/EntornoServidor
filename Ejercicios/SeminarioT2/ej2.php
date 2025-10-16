<?php
$array = [5, 82, 23, 96, 8, 4, 11, 43, 58];

function sumar($arrayNumeros){
    $sum = 0;
    foreach ($arrayNumeros as $num){
        $sum += $num;
    }
    return $sum;
}
$sum = sumar($array);
echo "Suma: {$sum}";