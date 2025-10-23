<?php
function maximoComunDivisor($num1, $num2){
    try{
        $mcd1 = [];
        for($i = 1; $i <= $num1; $i++) {
            if($num1 % $i == 0){
                array_push($mcd1, $i);
            }
        }
        $mcd2 = [];
        for($i = 1; $i <= $num2; $i++) {
            if($num2 % $i == 0){
                array_push($mcd2, $i);
            }
        }
        $res = [];
        for ($i = 0; $i < count($mcd1) ; $i++) {
            for ($j = 0; $j < count($mcd2) ; $j++) {
                if($mcd1[$i] == $mcd2[$j]){
                    array_push($res, $mcd1[$i]);
                }
            }
        }
        return "Maximo comun divisor: " . array_pop($res) . "\n";

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}

echo maximoComunDivisor(20, 33);
echo maximoComunDivisor(6, 9);
echo maximoComunDivisor("eeeeeee", 9);