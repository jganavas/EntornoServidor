<?php
trait Valorable{
    public int $valoracion{
        set => $value < 0 || $value > 10 ? throw new Exception("La valoración debe estar entre 0 y 10") : $this->valoracion = $value;
        get => $this->valoracion;
    }


}