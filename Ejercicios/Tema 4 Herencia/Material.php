<?php
abstract class Material{
    public string $titulo{
        set{
            $value == "" ? throw new Exception("El titulo no puede estar vacío") : $this->titulo = $value;
        }
    }
    public string $autor{
        set{
            $value == "" ? throw new Exception("El autor no puede ser nulo") : $this->autor = $value;
        }
    }

    public function __construct($titulo, $autor){
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
}