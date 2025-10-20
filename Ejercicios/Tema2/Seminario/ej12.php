<?php

function esCapicua($num){
    $num = strval($num);
    $num = strtolower($num);
    $numReverso = "";
    for($i = strlen($num)-1; $i >= 0; $i--){
        $numReverso .= $num[$i];
    }
    $num = (int)($num);
    $numReverso = (int)($numReverso);
    return ($numReverso == $num) ? "Es capicúa" : "No es capicúa";
}

echo "121: ". esCapicua(121) . "<br>";
echo "123: ". esCapicua(123) . "<br>";
echo "1331: ". esCapicua(1331) . "<br>";

