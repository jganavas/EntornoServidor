<?php
//Necesario para que php no convierta el número en string, si no se lo come con patatas aunque tipes el parámetro de la función
declare(strict_types=1);
function capitalizar($cadena){
    try{
        $array = str_word_count($cadena, 1);
        $string = "";
        foreach ($array as $palabra) {
            $palabra[0] = strtoupper($palabra[0]);
            $string .= " " . $palabra;
        }
        return $string . "\n";
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}

echo capitalizar("hola mundo shu primiyos");
echo capitalizar(5);
