<?php
function mosaico($n){
    $mosaico = "";
    $num = 0;
    for ($i = 1; $i < $n+1; $i++) {
        while($num < $i){
            $mosaico .= $i;
            $num++;
        }
        $mosaico .= "<br>";
    }
    return $mosaico;
}

echo mosaico(6);