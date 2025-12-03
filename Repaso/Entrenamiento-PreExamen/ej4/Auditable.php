<?php
Trait Auditable{
    public array $registros = [];

    public function registrar(string $accion): void{
        $this->registros[] = $accion;
    }
    public function limpiarRegistros(): void{
        $this->registros = [];
    }


}