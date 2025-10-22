<?php
function esArmstrong($num){
    $numString = strval($num);
    $suma = 0;
    for ($i = 0; $i < strlen($numString) ; $i++) {
        $suma += (Pow((int)$numString[$i], 3));
    }
    return $suma == $num ? "Es armstrong" : "No es armstrong";
}

echo esArmstrong(153);
echo "<br>";
echo esArmstrong(105);