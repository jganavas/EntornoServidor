<?php
function nFibonacci($parada){
    try{
        $fibonacci = 0;
        $secuenciaFib = [0, 1];
        $cont = 1;
        while($cont <= $parada) {
            $fibonacci = ($secuenciaFib[$cont] + $secuenciaFib[$cont-1]);
            array_push($secuenciaFib, $fibonacci);
            $cont++;
        }
        return "Resultado: " . $secuenciaFib[$parada] . "\n";

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}

echo nFibonacci(12);
//echo nFibonacci("ya ves"); ESTA COMPROBACION NO ME FUNCIONA
