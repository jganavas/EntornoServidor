<?php
function analizarTexto($texto, $secuencia){
    $texto = strtolower($texto);
    $texto = preg_replace('/[^\w\s]/', '', $texto);
    $palabras = preg_split('/\s+/', $texto, -1, PREG_SPLIT_NO_EMPTY);

    //Total palabras
    $totalPalabras = count($palabras);

    // Frecuencia de palabras
    $frecuencia = array_count_values($palabras);
    arsort($frecuencia);

    // Longitud promedio
    $longitudTotal = array_reduce($palabras, fn($total, $p) =>
        $total + strlen($p), 0
    );
    $longitudPromedio = $totalPalabras > 0 ?
        $longitudTotal / $totalPalabras : 0;

    $sequence = [];
    $secuenciaNGrama = [];
    for ($i = 0; $i < count($palabras); $i++) {
        for ($j = $i; $j < $secuencia; $j++) {
            array_push($sequence, $palabras[$j]);
        }
        array_push($secuenciaNGrama, $sequence);
    }

    return [
        'total_palabras' => $totalPalabras,
        'frecuencia' => $frecuencia,
        'longitud promedio' => $longitudPromedio,
        'N-Gramas' => $secuenciaNGrama
    ];
};

print_r(analizarTexto("hola me cago en tus muertos a caballo hola", 2));


