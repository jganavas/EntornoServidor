<?php
declare(strict_types=1);
function analizarTexto($texto, $secuencia){
    try {
        if(is_int($texto)){
            throw New Exception("Introduce valores válidos (string)");
        }
        if(is_string($secuencia)){
            throw new Exception("Introduce valores válidos (int)");
        }
        $texto = strtolower($texto);
        $texto = preg_replace('/[^\w\s]/', '', $texto);
        $palabras = preg_split('/\s+/', $texto, -1, PREG_SPLIT_NO_EMPTY);

        //Total palabras
        $totalPalabras = count($palabras);

        // Frecuencia de palabras
        $frecuencia = array_count_values($palabras);
        arsort($frecuencia);

        // Longitud promedio
        $longitudTotal = array_reduce($palabras, fn($total, $p) => $total + strlen($p), 0
        );
        $longitudPromedio = $totalPalabras > 0 ?
            $longitudTotal / $totalPalabras : 0;

        $secuenciaNGrama = [];
        for ($i = 0; $i < count($palabras); $i++) {
            $sequence = [];
            for ($j = $i; $j < ($i + $secuencia); $j++) {
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
    }catch(Exception $exInt){
        echo $exInt -> getMessage();
    }catch(Exception $exString){
        echo $exString -> getMessage();
    }
};

print_r(analizarTexto("hola me cago en tus muertos a caballo hola", 2));


