<?php
function convertirTemp($temperatura, $unidad1, $unidad2){
    try{
        define("CELSIUSFAHRENHEIT", $temperatura*(9/5)+32);
        define("CELSIUSKELVIN", ($temperatura + 273.15));
        define("FAHRENHEITCELSIUS", ($temperatura - 32)* 5/9);
        define("KELVINCELSIUS", $temperatura - 273.15);

        $unidad1 = strtolower($unidad1);
        $unidad2 = strtolower($unidad2);
        $res = 0;

        if($unidad1 == "celsius" && $unidad2 == "fahrenheit"){
            $res = CELSIUSFAHRENHEIT;
        }
        if($unidad1 == "celsius" && $unidad2 == "kelvin"){
            $res = CELSIUSKELVIN;
        }
        if($unidad1 == "fahrenheit" && $unidad2 == "celsius"){
            $res = CELSIUSKELVIN;
        }
        print "DEBUG (CONSTANTE MAGICA METHOD): " . __FUNCTION__ . "\n";
        print "DEBUG (CONSTANTE MAGICA LINE): " . __LINE__ . "\n";
        return $res . "\n";

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo "\n" . $array . ": " . $exception ->getMessage();
    }
}
echo convertirTemp(25, "celsius", "fahrenheit");
echo convertirTemp("temperatura", 69, "fahrenheit");