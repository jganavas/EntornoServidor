<?php
//Me salian warnings de php sin mucho sentido asi que me los he fumado
error_reporting(E_ERROR | E_PARSE);
function calcularDescuento($precioProducto, $tipoCliente){
    try{
        if(is_string($precioProducto)){
            throw new Exception("Tas equivocao bro");
        }
        define("DESCUENTO_ESTUDIANTE", 15);
        define("DESCUENTO_JUBILADO", 20);
        define("DESCUENTO_VIP", 25);

        return $precioFinal = match($tipoCliente){
            "estudiante" => $precioProducto-($precioProducto*DESCUENTO_ESTUDIANTE/100),
            "jubilado" => $precioProducto-($precioProducto*DESCUENTO_JUBILADO/100),
            "vip" => $precioProducto-($precioProducto*DESCUENTO_VIP/100),
            default => "Tipo de cliente no válido"
        };

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo "\n" . $precioProducto . ": " . $exception ->getMessage();
    }
}

echo calcularDescuento(100, "vip");
echo "\n";
echo calcularDescuento(100, "estudiante");
echo "\n";
echo calcularDescuento(100, "jubilado");
echo calcularDescuento("broder", 69);
