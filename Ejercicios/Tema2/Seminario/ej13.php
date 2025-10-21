<?php
function generarHTML($cadena){
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
        return '<' . $etiqueta . ' class="' . $clases . '" id="' . $id . '"></' . $etiqueta . '>';
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
        return '<' . $etiqueta . ' id="' . $id . '" class="' . $clases . '"></' . $etiqueta . '>';
    }

}
echo generarHTML("div.coche cochaso primo#VWPolo");