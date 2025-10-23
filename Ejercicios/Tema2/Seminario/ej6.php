<?php
//Necesario para que php no convierta el número en string, si no se lo come con patatas aunque tipes el parámetro de la función
declare(strict_types=1);
function contarOcurrencias($cadena, $subcadena){
    try{
        $cont = 0;
        $array = explode(" ", $cadena);
        for ($i = 0; $i < strlen($cadena); $i++) {
            if(!isset($array[$i])){
                continue;
            }
            if($array[$i] == $subcadena){
                $cont++;
            }
        }
        return "Numero de ocurrencias: " . $cont . "\n";
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}

echo contarOcurrencias("Hola me llamo pepe me llamo pepe y me llamo pepe", "llamo");
echo contarOcurrencias(5, "me");