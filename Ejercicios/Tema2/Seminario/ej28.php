<?php
function calculadora(){

    $operacion = readline("Selecciona operación: (+, -, *, /, POW, %)");
    $num1 = readline("Introduce el primer valor");
    while($num1 < 0 || $num1 > 9999){
        $num1 = readline("Introduce el primer valor");
    };

    $num2 = readline("Introduce el segundo valor");
    while($num2 < 0 || $num2 > 9999){
        $num2 = readline("Introduce el primer valor");
    };

    return match($operacion){
        "+" => $num1 + $num2,
        "-" => $num1 - $num2,
        "*" => $num1 * $num2,
        "/" => $num2 != 0 ? $num1 / $num2 : "A tu casa<br>",
        "POW" => $num1 ** $num2,
        "%" => $num1 % $num2,
    };
}
print("Resultado: " . calculadora());