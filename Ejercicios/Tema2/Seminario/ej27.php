<?php
function accederCodigoPostal($array){
    $codigoPostal = $array?->direccion?->codigoPostal;
    return $codigoPostal;
}

//Hay que castear el array asociativo a object para que funcione correctamente el nullsafe operator
$usuario = (object)[
    "nombre" => "pepe",
    "direccion" => (object)[
        "calle" => "crta sierra",
        "ciudad" => "granada",
        "codigoPostal" => 18008
    ]
];
echo accederCodigoPostal($usuario);