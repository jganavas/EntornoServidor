<?php
function esCapicua($num){
    try{
        if(is_string($num)){
            throw new Exception("Tas equivocao bro");
        }
        $num = strval($num);
        $num = strtolower($num);
        $numReverso = "";
        for($i = strlen($num)-1; $i >= 0; $i--){
            $numReverso .= $num[$i];
        }
        $num = (int)($num);
        $numReverso = (int)($numReverso);
        return ($numReverso == $num) ? "Es capicúa\n" : "No es capicúa\n";
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo $num . ": " . $exception ->getMessage();
    }
}

echo "121: ". esCapicua(121);
echo "123: ". esCapicua(123);
echo "1331: ". esCapicua(1331);
echo esCapicua("xD");

