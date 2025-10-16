<?php

function esPalindromo($palabra){
    $palabraReversa = "";
    for($i = strlen($palabra)-1; $i >= 0; $i--){
        $palabraReversa .= $palabra[$i];
    }
    return ($palabraReversa == $palabra) ? "Es palíndromo" : "No es palíndromo";
}

$esPalabruki = esPalindromo("reconocer");
echo $esPalabruki;