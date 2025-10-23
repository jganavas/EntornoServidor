<?php
function obtenerNumeroMayor($arrayNumeros){
    try{
        for($i = 0; $i < count($arrayNumeros)-1; $i++){
            for($j = 0; $j < count($arrayNumeros) - $i - 1; $j++) {
                if(is_nan($arrayNumeros[$j])){
                    break;
                }
                if ($arrayNumeros[$j] > $arrayNumeros[$j + 1]) {
                    $aux = $arrayNumeros[$j];
                    $arrayNumeros[$j] = $arrayNumeros[$j + 1];
                    $arrayNumeros[$j + 1] = $aux;
                }
            }
        }
        $max = array_pop($arrayNumeros);
        return $max;
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}
$array = [5, 82, 23, 96, 8, 4, 11, 43, 58];
$num = obtenerNumeroMayor($array);
/*
$array2 = [5, 82, 23, "h", 8, 4, 11, 43, 58];
$num = obtenerNumeroMayor($array2);
*/
echo $num;
?>