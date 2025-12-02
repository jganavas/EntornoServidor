<?php
class Conexion{
    public static function conectar(){
        try{
            $pdoe = new PDO('mysql:host=0.0.0.0;port=3307;dbname=biblioteca', 'estudiante', 'estudiante123');
            echo "✅ Conexión exitosa a la base de datos 'fruteria'\n\n";

            return $pdoe;
        }catch(PDOException $pdoe){
            echo 'Error de conexion ' . $pdoe->getMessage();
        }
    }
}