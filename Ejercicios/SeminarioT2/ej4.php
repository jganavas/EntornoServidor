<?php

function esPalindromo($palabra){
    $palabraReversa = "";
    for($i = strlen($palabra); $i >= 0; $i--){
        $palabraReversa += $palabra[$i];
    }
    $esPalindromo = ($palabraReversa == $palabra) ? "Es palíndromo" : "No es palíndromo";
}

$esPalabruki = esPalindromo("reconocer");
echo $esPalabruki;