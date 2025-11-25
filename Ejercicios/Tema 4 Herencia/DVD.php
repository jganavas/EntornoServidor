<?php
class DVD extends Material{

    public bool $prestado;
    public function __construct($titulo, $autor){
        parent::__construct($titulo, $autor);
    }
    public function prestar(){
        $this->prestado = true ? throw new Exception("El libro ya está prestado") : $this->prestado = true;
    }
    public function devolver(): void{
        $this->prestado = false;
    }
}