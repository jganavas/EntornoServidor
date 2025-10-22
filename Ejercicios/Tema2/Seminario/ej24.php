<?php
function calcularDescuento($precioProducto, $tipoCliente){
    define("DESCUENTO_ESTUDIANTE", 15);
    define("DESCUENTO_JUBILADO", 20);
    define("DESCUENTO_VIP", 25);

    return $precioFinal = match($tipoCliente){
        "estudiante" => $precioProducto-($precioProducto*DESCUENTO_ESTUDIANTE/100),
        "jubilado" => $precioProducto-($precioProducto*DESCUENTO_JUBILADO/100),
        "vip" => $precioProducto-($precioProducto*DESCUENTO_VIP/100),
        default => "Tipo de cliente no válido"
    };
}

echo calcularDescuento(100, "vip");
echo "<br>";
echo calcularDescuento(100, "estudiante");
echo "<br>";
echo calcularDescuento(100, "jubilado");
