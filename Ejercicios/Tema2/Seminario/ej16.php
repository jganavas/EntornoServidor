<?php
function calcularProducto($array){
    try{
        if(is_string($array)){
            throw new Exception("Tas equivocao bro");
        }
        $res = 1;
        foreach($array as $num){
            $res *= $num;
        }
        return $res . "\n";
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo $array . ": " . $exception ->getMessage();
    }
}
$array = [2, 3, 4];
echo calcularProducto($array);
echo calcularProducto("pinguinaso");