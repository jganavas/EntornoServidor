<?php
function sumar($arrayNumeros){
    try{
        $sum = 0;
        foreach ($arrayNumeros as $num){
            if(is_nan($num)){
                break;
            }else{
                $sum += $num;
            }
        }
        return "Suma: " . $sum;
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}
/*
$array = [5, 82, 23, "h", 8, 4, 11, 43, 58];
echo sumar($array);
*/

$array = [5, 82, 23, 96, 8, 4, 11, 43, 58];
echo sumar($array);
