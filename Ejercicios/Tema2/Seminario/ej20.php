<?php
function calcularFactorial($num){
    try{
        if(is_string($num)){
            throw new Exception("Tas equivocao bro");
        }
        $factorial = 1;
        for ($i = $num; $i > 0 ; $i--) {
            $factorial *= $i;
        }
        return $factorial;

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo "\n" . $num . ": " . $exception ->getMessage();
    }
}

echo calcularFactorial(5);
echo calcularFactorial("caracola");