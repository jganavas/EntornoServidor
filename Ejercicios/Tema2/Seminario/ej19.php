<?php
//Necesario para que php no convierta el número en string, si no se lo come con patatas aunque tipes el parámetro de la función
declare(strict_types=1);
function eliminarVocales($cadena){
    try{
        $vocales = ["a", "e", "i", "o", "u"];
        $res = str_replace($vocales, "", $cadena);
        return $res . "\n";

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo "\n" . $num . ": " . $exception ->getMessage();
    }
}

echo eliminarVocales("Hola mundo");
echo eliminarVocales(69);