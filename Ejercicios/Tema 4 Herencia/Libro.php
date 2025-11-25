<?php
class Libro extends Material implements Prestable{
    use Valorable;
    public int $edicion;
    public bool $prestado;

    public function __construct($titulo, $autor, $edicion){
        parent::__construct($titulo, $autor);
        $this->edicion = $edicion;
    }
    public function prestar(){
        $this->prestado = true ? throw new Exception("El libro ya está prestado") : $this->prestado = true;
    }
    public function devolver(): void{
        $this->prestado = false;
    }
}