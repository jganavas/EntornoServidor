<?php
function contarOcurrencias($cadena, $subcadena){
    $cont = 0;
    $array = explode(" ", $cadena);
    for ($i = 0; $i < strlen($cadena); $i++) {
        if($array[$i] == $subcadena){
            $cont++;
        }
    }
    return $cont;
}

$cadena = "Hola me llamo pepe me llamo pepe y me llamo";
$cantidadOcurrencias = contarOcurrencias($cadena, "llamo");
echo $cantidadOcurrencias;