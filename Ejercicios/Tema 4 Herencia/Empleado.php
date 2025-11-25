<?php
class Empleado{
    public float $salario{
        set{
            if($value < 0){
                throw new Exception("No se permite un saldo negativo");
            }else{
                $this->salario = $value*12;
            }
        }

    }
    public string $nombre{
        get => strtoupper($this->salario);
        set => $this->nombre = $value;
    }


    public function __construct($salario, $nombre){
        $this->salario = $salario;
        $this->nombre = $nombre;
    }
}