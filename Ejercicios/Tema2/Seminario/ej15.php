<?php
function compararArray($array1, $array2){
    $booleanos = [];
    for ($i = 0; $i < count($array1); $i++) {
        if($array1[$i] === $array2[$i]){
            $booleanos[$i] = true;
        }else{
            $booleanos[$i] = false;
        }
    }
    return $booleanos;
}

$array1 = [5, 4, 8, 9, 1, 20];
$array2 = [5, 1, 7, 9, 15, 20, 9];
$res = compararArray($array1, $array2);
var_dump($res);