<?php
abstract class Figura{
    protected string $color;

    public function __construct($color){
        $this->color = $color;
    }
    public abstract function calcularArea();

    public function obtenerColor(){
        return $this->color;
    }
}