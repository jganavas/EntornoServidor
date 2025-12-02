<?php
include "Conexion.php";
class Libro
{
    public int $id;
    public string $titulo {
        get => trim($this->titulo);
    }
    public int $autorId;
    public int $generoId;
    public string $isbn;
    public int $ejemplares {
        set => $value < 0 ? throw new Exception("minimo 0") : $this->ejemplares = $value;

    }
    public int $disponibles {
        set => ($value < 0 || $value > $this->ejemplares) ? throw new Exception("minimo 0") : $this->disponibles = $value;
    }

    public function estaDisponible($id) : bool{
        return $this->disponibles < 0;
    }

    public function prestar($id) : bool{
        return $this->disponibles < 1 ? false : $this->disponibles -= 1;
    }

    public function devolver($id) : bool{
        return $this->disponibles === $this->ejemplares ? false : $this->disponibles += 1;
    }

    public function toArray(): array{
        return [
            "ID" => $this->id,
            "Titulo" => $this->titulo,
            "ID Autor" => $this->autorId,
            "ID Genero" => $this->generoId,
            "ISBN" => $this->isbn,
            "Numero de ejemplares" => $this->ejemplares,
            "Disponibles" => $this->disponibles
        ];
    }

    public static function buscarPorID($id) : ?Libro{
        $pdo = Conexion::conectar();
        $stmt = $pdo->prepare("SELECT * FROM libros WHERE id = ?");
        $stmt->execute($id);
        $libro = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $libro;
    }

    public static function buscarTodos(): array{
        $pdo = Conexion::conectar();
        $stmt = $pdo->query("SELECT * FROM libros");
        $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $libros;
    }

}
print_r(Libro::buscarTodos());



