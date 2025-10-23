<?php
function mosaico($n){
    try{
        $mosaico = "";
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i ; $j++) {
                $mosaico .= $i;
            }
            $mosaico .= "\n";
        }
        return $mosaico;
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}
echo mosaico(8);
echo mosaico("o");