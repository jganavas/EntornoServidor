<?php
class Rectangulo implements Calculable {
    public int $longitud1;
    public int $longitud2;

    public function __construct($longitud1, $longitud2){
        $this->longitud1 = $longitud1;
        $this->longitud2 = $longitud2;
    }

    public function calcularArea(){
        return 0;
    }

    public function calcularPerimetro(){
        return 0;
    }


}