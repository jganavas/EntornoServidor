<?php
function convertirMillasToKm($milla){
    try{
        $km = 1.60934;
        $km *= $milla;

        return "Conversion: " . $km;
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}

echo convertirMillasToKm(25.07);
//echo convertirMillasToKm("h");

