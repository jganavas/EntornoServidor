<?php
function esNumeroPerfecto($num){
    try{
        if(is_string($num)){
            throw new Exception("Tas equivocao bro");
        }
        $sumaDivisores = 0;
        for ($i = 1; $i < $num ; $i++) {
            if ($num % $i == 0) {
                $sumaDivisores += $i;
            }
        }
        return $num == $sumaDivisores;

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo "\n" . $num . ": " . $exception ->getMessage();
    }
}

echo esNumeroPerfecto(6) ? "Es perfecto " : "No es perfecto";
echo esNumeroPerfecto("dragon ball");