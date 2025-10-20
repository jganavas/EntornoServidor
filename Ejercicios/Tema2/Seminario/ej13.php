<?php

function generarHTML($cadena){
    $arrayClases = explode(".", $cadena);
    $etiquetaPrimera = $arrayClases[0];
    $arrayids = explode("#", $cadena);
    $apertura = "<";
    $cierre = ">"
    $cierre2 = "</";
    $clase = "class= ";
    $id = "id= ";
    
    $html = $apertura . $arrayClases[0] . $clase . $arrayClases[1] . $id . $arrayids[1] . $cierre . $cierre2 . $cierre;
    
}
/*
$cadena = "div.oferta#coche";
$arrayClases = explode(".", $cadena);
print_r($arrayClases);
$arrayids = explode("#", $cadena);
print_r($arrayids);
*/

echo generarHTML("div.coche#VWPolo");