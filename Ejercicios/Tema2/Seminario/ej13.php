<?php
function generarHTML($cadena){
    //$cadena = "div.coche cochaso primo#VWPolo";
    $cadena = "div#VWPolo.coche cochaso primo";
    $etiqueta = explode(".",$cadena)[0];

    $clases = "";
    $id = "";

    //Longitud etiqueta padre (div, section, main...)
    $longitudEtiqueta = strlen($etiqueta);

    if($cadena[$longitudEtiqueta] == "."){
        $longitudEtiqueta++;
        while($cadena[$longitudEtiqueta] != "#"){
            $clases .= $cadena[$longitudEtiqueta++];
        }
        $longitudEtiqueta++;
        while($cadena[$longitudEtiqueta] != $cadena[strlen($cadena)]){
            $id .= $cadena[$longitudEtiqueta++];
        }
        //return "<" . $etiqueta . " class=" . $clases . " id=" . $id . "></" . $etiqueta . ">";
    }

    if($cadena[$longitudEtiqueta] == "#"){
        $longitudEtiqueta++;
        while($cadena[$longitudEtiqueta] !== "."){
            $id .= $cadena[$longitudEtiqueta++];
        }
        $longitudEtiqueta++;
        while($cadena[$longitudEtiqueta] !== $cadena[strlen($cadena)]){
            $clases .= $cadena[$longitudEtiqueta++];
        }
        //return "<" . $etiqueta . " id=" . $id . " class=" . $clases . "></" . $etiqueta . ">";
    }
    echo $clases . "<br>";
    echo $id;

}

echo generarHTML("div.coche cochaso primo#VWPolo");