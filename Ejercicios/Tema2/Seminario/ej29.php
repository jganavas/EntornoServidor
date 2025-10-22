<?php
function convertirTemp($temperatura, $unidad1, $unidad2){
    define("CELSIUSFAHRENHEIT", (9/5)+32);
    define("CELSIUSKELVIN", 273.15);
    define("FAHRENHEITCELSIUS", ($unidad1 - 32)* 5/9);
    define("KELVINCELSIUS", $unidad1 - 273.15);

    $res = 0;
    if($unidad1 == "celsius" && $unidad2 == "fahrenheit"){
        $res = $unidad1*CELSIUSFAHRENHEIT;
    }
    if($unidad1 == "celsius" && $unidad2 == "kelvin"){
        $res = $unidad1+ CELSIUSKELVIN;
    }
    if($unidad1 == "fahrenheit" && $unidad2 == "celsius"){
        $res = $unidad1+ CELSIUSKELVIN;
    }

}