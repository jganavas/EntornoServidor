<?php
function clasificarNotas($nota){
    if(is_string($nota)){
        echo "Asin no bro";
        die();
    }
    return match($nota){
        9,10 => "Sobresaliente",
        7,8 => "Notable",
        5,6 => "Aprobado",
        0, 1, 2, 3, 4 => "Suspenso",
        default => "Valor no válido"
    };
}

echo clasificarNotas(3) . "\n";
echo clasificarNotas("bro");