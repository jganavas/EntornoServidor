<?php
//Necesario para que php no convierta el número en string, si no se lo come con patatas aunque tipes el parámetro de la función
declare(strict_types=1);
function esPalindromo($palabra){
    try{
        $palabra = strtolower($palabra);
        $palabraReversa = "";
        for($i = strlen($palabra)-1; $i >= 0; $i--){
            $palabraReversa .= $palabra[$i];
        }
        return ($palabraReversa == $palabra) ? "Es palíndromo\n" : "No es palíndromo\n";
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}


echo esPalindromo("reconocer");
echo esPalindromo(5);
