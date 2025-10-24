<?php
function accederCodigoPostal($array){
    try{
        if(is_string($array)){
            throw New Exception("Tas equivocao bro");
        }
        return $array?->direccion?->codigoPostal;

    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }catch(Exception $exception){
        echo "\n" . $array . ": " . $exception ->getMessage();
    }
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
//echo accederCodigoPostal($usuario);
echo accederCodigoPostal("que pasa broski");