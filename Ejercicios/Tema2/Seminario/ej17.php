<?php
function filtrarPares($array){
    /*foreach ($array as $num){
        if($num % 2 != 0){
            array_splice($array, $num, 1);
        }
    }*/
    for ($i = 0; $i < count($array) ; $i++) {
        if($array[$i] % 2 != 0){
            array_splice($array, $i, 1);
        }
    }
    return $array;
}

$array = [2, 5, 8, 4, 3, 20, 11];
$res = filtrarPares($array);
var_dump($res);