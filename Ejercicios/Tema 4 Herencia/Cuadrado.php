<?php
class Cuadrado extends Figura {
    public int $longitud;
    public function __construct($color, $longitud){
        parent::__construct($color);
        $this->longitud = $longitud;
    }
    public function calcularArea(){
        return 0;
    }
}