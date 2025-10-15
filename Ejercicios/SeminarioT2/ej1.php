<?php

$array = [5, 82, 23, 96, 8, 4, 11, 43, 58];
function obtenerNumeroMayor($arrayNumeros){
    for($i = 0; $i < count($arrayNumeros); $i++){
        for($j = 0; $j < count($arrayNumeros); $j++){
            if($arrayNumeros[$j] > $arrayNumeros[$j + 1]){
                $aux = $arrayNumeros[$j+1];
                $arrayNumeros[$j] = $arrayNumeros[$j+1];
                $arrayNumeros[$j+1] = $aux;
            }
        }
    }
    return $arrayNumeros[count($arrayNumeros)];
}

$num = obtenerNumeroMayor($array);
var_dump($num);
echo "hyola";
echo $num;


?>