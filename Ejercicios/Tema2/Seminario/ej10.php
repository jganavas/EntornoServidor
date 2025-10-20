<?php

function nFibonacci($parada){
    $fibonacci = 0;
    $secuenciaFib = [0, 1];
    $cont = 1;
    while($cont <= $parada) {
        $fibonacci = ($secuenciaFib[$cont] + $secuenciaFib[$cont-1]);
        array_push($secuenciaFib, $fibonacci);
        $cont++;
    }
    return $secuenciaFib[$parada];
}

echo nFibonacci(12);
