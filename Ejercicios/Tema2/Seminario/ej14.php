<?php
function mosaico($n){
    $mosaico = "";
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i ; $j++) {
            $mosaico .= $i;
        }
        $mosaico .= "<br>";
    }
    return $mosaico;
}
echo mosaico(8);