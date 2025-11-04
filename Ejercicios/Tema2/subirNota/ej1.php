<?php
function calculadora($num1, $num2, $operacion){
    try{
        $res = match($operacion){
            "sumar" => $num1 + $num2,
            "restar" => $num1 - $num2,
            "multiplicar" => $num1 * $num2,
            "dividir" => $num2 != 0 ? $num1 / $num2 : "A tu casa\n",
            "potencia" => $num1 ** $num2,
            "modulo" => $num1 % $num2,

        };
    //La operación esperada no corresponde con ninguna existente
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido\n";
    //Tipo de dato recibido equivocado
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente\n";
    }
    return $res;
}
/*
//Caso que recibe un tipo equivocado (recibe string, espera entero)
$res = calculadora("hola", 0, "multiplicar");
echo $res;
//Caso en el que la operación no existe
$res = calculadora(5, 0, "mult");
echo $res;
//Caso correcto
$res = calculadora(5, 2, "multiplicar");
echo $res . "\n";
//División por cero
$res = calculadora(5, 0, "dividir");
echo $res;
*/