<?php
class Revista extends Material implements Prestable {
    public string $editorial;
    public bool $prestado;

    public function __construct($titulo, $autor, $editorial){
        parent::__construct($titulo, $autor);
        $this->editorial = $editorial;
    }
    public function prestar(){
        $this->prestado = true ? throw new Exception("El libro ya está prestado") : $this->prestado = true;
    }
    public function devolver(): void{
        $this->prestado = false;
    }
}