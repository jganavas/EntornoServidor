<?php
$productos = [
    ["id" => 1, "nombre" => "Laptop", "precio" => 899.99, "stock" => 10],
    ["id" => 2, "nombre" => "Teléfono", "precio" => 499.50, "stock" => 15],
    ["id" => 3, "nombre" => "Tablet", "precio" => 349.99, "stock" => 5]
];

//Filtrar precio > 400
$mayores400 = array_filter($productos, fn($prod) => $prod["precio"] > 400);
print_r($mayores400);

//Ordenar descendente
rsort($productos);
print_r($productos);

//Calcular valor
$total = array_reduce($productos, fn($total, $prod) =>
    $total + ($prod["precio"] * $prod["stock"]), 0
);

print_r($total);

function buscarProducto($array, $subcadena){
    foreach ($array as $producto) {
        if (stripos($producto["nombre"], $subcadena) !== false) {
            $res = [$producto["nombre"], $producto["id"], $producto["precio"]];
        }
    }
    return $res;
};
print_r(buscarProducto($productos, "lap"));

