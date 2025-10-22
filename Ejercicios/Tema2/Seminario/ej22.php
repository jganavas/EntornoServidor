<?php
function esNumeroPerfecto($num){
    $sumaDivisores = 0;
    for ($i = 1; $i < $num ; $i++) {
        if ($num % $i == 0) {
            $sumaDivisores += $i;
        }
    }
    return $num == $sumaDivisores;
}

echo esNumeroPerfecto(6) ? "Es perfecto " : "No es perfecto";