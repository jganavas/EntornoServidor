<?php

function contarOcurrencias($cadena, $subcadena){
    $cont = 0;
    for ($i = 0; $i < strlen($cadena); $i++) {
        if(strcasecmp($cadena[$i], $subcadena) == 0){
            $cont++;
        }
    }
    return $cont;
}

$cadena = "Hola me llamo pepepepe";
$cantidadOcurrencias = contarOcurrencias($cadena, "p");
echo $cantidadOcurrencias;