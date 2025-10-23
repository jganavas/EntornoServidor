<?php
function esArmstrong($num){
    try{
        if(is_string($num)){
            throw new Exception("Tas equivocao bro");
        }
        $numString = strval($num);
        $suma = 0;
        for ($i = 0; $i < strlen($numString) ; $i++) {
            $suma += (Pow((int)$numString[$i], 3));
        }
        return $suma == $num ? "Es armstrong\n" : "No es armstrong\n";

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo "\n" . $num . ": " . $exception ->getMessage();
    }
}

echo esArmstrong(153);
echo esArmstrong(105);
echo esArmstrong("Tortugas ninja");