<?php
function invertirCadena($cadena){
    $palabraReversa = "";
    for($i = strlen($cadena)-1; $i >= 0; $i--){
        $palabraReversa .= $cadena[$i];
    }
    return $palabraReversa;
}
echo invertirCadena("Hola mundo");