<?php
class Coche extends Vehiculo{
    public int $numeroPuertas;
    public function __construct($marca, $modelo, $anio, $numeroPuertas){
        parent::__construct($marca, $modelo, $anio);
        $this->numeroPuertas = $numeroPuertas;
    }
    public function mostrar_info(): string{
        $info = parent::mostrar_info();
        return $info . "\nNumero de puertas: " . $this->numeroPuertas;
    }
}
