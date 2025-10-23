<?php
function esPrimo($num){
    try{
        if(is_string($num)){
            throw new Exception("Tas equivocao bro");
        }
        return (($num > 1) && ($num % $num == 0) && ($num % 1 == 0));

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo "\n" . $num . ": " . $exception ->getMessage();
    }
}

echo esPrimo(3) ? "Es primo" : "No es primo";
echo esPrimo("hola");
