<?php
class CuentaBancaria{
    private float $saldo;
    public function __construct($saldo){
        $this->saldo = $saldo;
    }
    public function depositar($cantidad){
        $this->saldo += $cantidad;
    }
    public function retirar($cantidad){
        if($this->saldo -= $cantidad > 0){
            $this->saldo -= $cantidad;
        }else{
            echo "No hay suficiente saldo";
        }
    }
    public function consultarSaldo(){
        return "Saldo: " . $this->saldo;
    }

}
