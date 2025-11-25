<?php
use Cassandra\Date;
trait Timestamp{
    public Date $fechaCreacion{
        set => $this->fechaCreacion = $value;
    }
    public Date $fechaModificacion{
        set => $this->fechaModificacion = $value;
    }


}