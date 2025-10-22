<?php
function eliminarVocales($cadena){
    $vocales = ["a", "e", "i", "o", "u"];
    $res = str_replace($vocales, "", $cadena);
    return $res;
}

echo eliminarVocales("Hola mundo");