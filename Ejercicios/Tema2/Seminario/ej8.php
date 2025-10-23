<?php

function sumarDigitos($num){
    try{
        $sum = 0;
        $digito = 0;

        while($num != 0){
            $digito = $num % 10;
            $sum += $digito;
            $num /= 10;
        }
        return "Suma: " . $sum . "\n";
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}

echo sumarDigitos(245);
echo sumarDigitos("hola:)");
