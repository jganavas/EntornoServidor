<?php

function generarHTML($cadena){
    $clases = preg_split('/[.#]/', $cadena);
    $ides = preg_split('/[#]/', $cadena);
    
    $html = "<" . $clases[0]. "> class=" . $clases[1] . " id=" . $ides[1] . "></" . $clases[0] . ">";
    return $html;
}
/*
$cadena = "div.oferta#coche";
$arrayClases = explode(".", $cadena);
print_r($arrayClases);
$arrayids = explode("#", $cadena);
print_r($arrayids);
*/

echo generarHTML("div.coche#VWPolo");