<?php
function calcularFactorial($num){
    $factorial = 1;
    for ($i = $num; $i > 0 ; $i--) {
        $factorial *= $i;
    }
    return $factorial;
}

echo calcularFactorial(5);