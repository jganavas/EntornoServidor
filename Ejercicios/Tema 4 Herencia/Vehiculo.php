<?php
class Vehiculo{
    public string $marca;
    public string $modelo;
    public int $anio;

    public function __construct(string $marca, String $modelo, int $anio){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
    }
    public function mostrar_info(): string{
        return "Marca: " . $this->marca . "\nModelo: " . $this->modelo . "\nAño: " . $this->anio;
    }
}
