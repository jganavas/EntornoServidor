<?php
include "../Conexion.php";
abstract class Persona{
    public int $id;
    public string $nombre;
    public string $email;

    public function __construct($id, $nombre, $email){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public abstract function getRol(): string;

    public function getInfoCompleta(): string{
        return "ID: " . $this->id . "\nNombre: " . $this->nombre . "\nEmail: " . $this->email;
    }
}