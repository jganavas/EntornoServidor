<?php
//Necesario para que php no convierta el número en string, si no se lo come con patatas aunque tipes el parámetro de la función
declare(strict_types=1);
function invertirCadena($cadena){
    try{
        $palabraReversa = "";
        for($i = strlen($cadena)-1; $i >= 0; $i--){
            $palabraReversa .= $cadena[$i];
        }
        return $palabraReversa . "\n";

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo "\n" . $num . ": " . $exception ->getMessage();
    }
}
echo invertirCadena("Hola mundo");
echo invertirCadena(69);