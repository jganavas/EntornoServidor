<?php
function calcularDescuento($producto, $tipoCliente){
    define("DESCUENTO_ESTUDIANTE", 3);
    define("DESCUENTO_JUBILADO", 6);
    define("DESCUENTO_VIP", 10);

    enum tipo{
        case Estudiante;
        case Jubilado;
        case Vip;
    }

    return $precioFinal = match($tipoCliente){
        Estudiante =>
    }

}