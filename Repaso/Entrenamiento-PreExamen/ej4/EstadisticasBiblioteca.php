<?php
include "../Conexion.php";
class EstadisticasBiblioteca{
    use Auditable;

    public function librosDisponibles(): array{
        $pdo = Conexion::conectar();

        $stmt = $pdo->query('SELECT * FROM libros');
        $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $disponibles = array_filter($libros, fn($lib) => $lib['disponibles'] > 0);

        return $disponibles;
    }
}