<?php
include 'ej1.php';
include 'ej2.php';
include 'ej3.php';
include 'ej4.php';

$opcion = 0;

while($opcion != 5){

    echo "Ejercicio 1: Calculadora\nEjercicio 2: Validar formulario\nEjercicio 3: Validador de arrays\nEjercicio 4: Procesador de texto\n";
    $opcion = readline("A qué ejercicio quieres acceder? (1-4) (5 para salir)");
    while($opcion < 0 || $opcion > 5){
        echo "Acuestate";
        $opcion = readline("A qué ejercicio quieres acceder? (1-4) (5 para salir)");
    }

    switch ($opcion) {
        case 1:
            $num1 = readline("Introduce el primer número");
            $num2 = readline("Introduce el segundo número");
            $operacion = readline("Qué operación quieres usar? (sumar, restar, multiplicar, dividir, potencia, modulo)");
            echo calculadora($num1, $num2, $operacion) . "\n";
            break;
        case 2:
            echo "Introduce los datos a validar: ";
            $email = readline("Email: ");
            $nombre = readline("Nombre: ");
            $tlf = readline("Telefono: ");
            $pass = readline("Contraseña: ");
            echo validarFormulario($email, $nombre, $tlf, $pass) . "\n";
            break;
        case 3:
            $productos = [
                ["id" => 1, "nombre" => "Laptop", "precio" => 899.99, "stock" => 10],
                ["id" => 2, "nombre" => "Teléfono", "precio" => 499.50, "stock" => 15],
                ["id" => 3, "nombre" => "Tablet", "precio" => 349.99, "stock" => 5]
            ];
            $producto = readline("¿Qué producto quieres buscar?");
            $res = buscarProducto($productos, $producto);
            print_r($res);
            echo "\n";
            break;
        case 4:
            $cadena = readline("Introduce la cadena a analizar");
            $ngrama = readline("A qué nivel de n-grama quieres llegar?");
            $res = analizarTexto($cadena, $ngrama);
            print_r($res);
            echo "\n";
            break;
    };
}

