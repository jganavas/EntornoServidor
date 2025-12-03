<?php
include "../Conexion.php";
class Socio extends Persona{
    public DateTime $fechaAlta;
    public bool $activo;

    public function __construct($id, $nombre, $email, $fechaAlta, $activo){
        parent::__construct($id, $nombre, $email);
        $this->fechaAlta = $fechaAlta;
        $this->activo = $activo;
    }

    public function getRol(): string{
        return "Socio";
    }

    public function antiguedad(): DateInterval{
        $ahora = new DateTime();
        return date_diff($this->fechaAlta, $ahora);
    }

    public function estaActivo(): bool{
        return $this->activo;
    }

    public function darDeBaja(): void{
        $this->activo = false;
    }

    public function guardar(): bool{
        $guardado = true;
        $pdo = Conexion::conectar();
        $stmt = $pdo->prepare('SELECT nombre FROM socios WHERE id = ?');

        $stmt->execute($this->id);
        $socio = $stmt->fetchColumn();
        if(!$socio){
            $stmt = $pdo->prepare('INSERT INTO socios VALUES (?, ?, ?)');
            $stmt->execute([$this->id, $this->nombre, $this->email]);
            echo "Usuario introducido en la base de datos";
        }else if($socio){
            $stmt = $pdo->prepare('UPDATE socios SET activo = ? WHERE id = ?');
            $stmt->execute([$this->activo, $this->id]);
        }else{
            $guardado = false;
        }
        return $guardado;
    }

    public static function buscarPorEmail(string $email): ?array{
        $pdo = Conexion::conectar();
        $stmt = $pdo->prepare('SELECT nombre FROM socios WHERE email = ?');

        $stmt->execute($email);
        return $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}