<?php
//Necesario para que php no convierta el número en string, si no se lo come con patatas aunque tipes el parámetro de la función
declare(strict_types=1);
function contarOcurrencias($cadena, $subcadena){
    try{
        $cont = 0;
        for ($i = 0; $i < strlen($cadena); $i++) {
            if(strcasecmp($cadena[$i], $subcadena) == 0){
                $cont++;
            }
        }
        return "Cantidad de ocurrencias: " . $cont . "\n";
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}

echo contarOcurrencias("Hola me llamo pepepepe", "p");
echo contarOcurrencias("Hola me llamo pepepepe", 8);
