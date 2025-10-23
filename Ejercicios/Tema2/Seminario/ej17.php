<?php
function filtrarPares($array){
    try{
        if(is_string($array)){
            throw new Exception("Tas equivocao bro");
        }
        for ($i = 0; $i < count($array) ; $i++) {
            if($array[$i] % 2 != 0){
                array_splice($array, $i, 1);
            }
        }
        return $array;

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo $array . ": " . $exception ->getMessage();
    }
}

$array = [2, 5, 8, 4, 3, 20, 11];
$res = filtrarPares($array);
var_dump($res);
echo filtrarPares("z");