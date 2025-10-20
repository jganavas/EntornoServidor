<?php
function convertirMillasToKm($milla){
    $km = 1.60934;
    $km *= $milla;

    return $km;
}

$kilometros = convertirMillasToKm(25.07);
echo "Conversion: {$kilometros}";