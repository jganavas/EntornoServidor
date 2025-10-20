<?php
function capitalizar($cadena){
    $array = str_word_count($cadena, 1);
    $string = "";
    foreach ($array as $palabra) {
        $palabra[0] = strtoupper($palabra[0]);
        $string .= " " . $palabra;
    }
    return $string;
}

$cadena = "me llamo pepin pepon";
$res = capitalizar($cadena);
echo $res;
