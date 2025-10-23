<?php
//Necesario para que php no convierta el número en string, si no se lo come con patatas aunque tipes el parámetro de la función
declare(strict_types=1);
function generarHTML($cadena){
    try{
        //Regex para conseguir la etiqueta padre (div, section, main...)
        preg_match('/^([a-z]+)/', $cadena, $matches);
        $etiqueta = $matches[1];

        $clases = "";
        $id = "";

        $longitudEtiqueta = strlen($etiqueta);

        //Caso para cuando primero encuentras las clases
        if($cadena[$longitudEtiqueta] == "."){
            $longitudEtiqueta++;
            while($cadena[$longitudEtiqueta] != "#"){
                $clases .= $cadena[$longitudEtiqueta++];
            }
            $longitudEtiqueta++;
            while($longitudEtiqueta < strlen($cadena)){
                $id .= $cadena[$longitudEtiqueta++];
            }
            return '<' . $etiqueta . ' class="' . $clases . '" id="' . $id . '"></' . $etiqueta . '>' . "\n";
        }

        //Caso para cuando primero encuentras el ID
        if($cadena[$longitudEtiqueta] == "#"){
            $longitudEtiqueta++;
            while($cadena[$longitudEtiqueta] !== "."){
                $id .= $cadena[$longitudEtiqueta++];
            }
            $longitudEtiqueta++;
            while($longitudEtiqueta < strlen($cadena)){
                $clases .= $cadena[$longitudEtiqueta++];
            }
            return '<' . $etiqueta . ' id="' . $id . '" class="' . $clases . '"></' . $etiqueta . '>' . "\n";
        }
    }catch(UnhandledMatchError $ex){
        echo "Introduce un valor válido" . "\n";
    }catch(TypeError $tE){
        echo "Introduce el tipo correspondiente" . "\n";
    }
}
echo generarHTML("div.coche cochaso primo#VWPolo");
echo generarHTML(55555555);