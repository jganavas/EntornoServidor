<?php
$array = [5, 82, 23, 96, 8, 4, 11, 43, 58];
function obtenerNumeroMayor($arrayNumeros){
    for($i = 0; $i < count($arrayNumeros)-1; $i++){
        for($j = 0; $j < count($arrayNumeros) - $i - 1; $j++) {
            if ($arrayNumeros[$j] > $arrayNumeros[$j + 1]) {
                $aux = $arrayNumeros[$j];
                $arrayNumeros[$j] = $arrayNumeros[$j + 1];
                $arrayNumeros[$j + 1] = $aux;
            }
        }
    }
    $max = array_pop($arrayNumeros);
    return $max;
}
$num = obtenerNumeroMayor($array);
echo $num;
?>