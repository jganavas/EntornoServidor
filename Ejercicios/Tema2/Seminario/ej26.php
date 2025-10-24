<?php
function validarDatos($arrayAsociativo){

    $nombreDefault = "Anónimo";
    $emailDefault = "sin-email@example.com";
    $edadDefault = "18";
    $ciudadDefault = "Desconocida";

    $arrayAsociativo["nombre"] ??= $nombreDefault;
    $arrayAsociativo["email"] ??= $emailDefault;
    $arrayAsociativo["edad"] ??= $edadDefault;
    $arrayAsociativo["ciudad"] ??= $ciudadDefault;

    return $arrayAsociativo;
}

$array = [
    "nombre" => "Pepe",
    "email" => null,
    "edad" => 26,
];

$array = validarDatos($array);

print_r($array);