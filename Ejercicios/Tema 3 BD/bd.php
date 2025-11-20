<?php
global $pdo;
$pdo;
try {
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=postgres', 'pepedb', '1234');
    echo "PDO connection object created\n";

    //EJERCICIO 1

//    $sql = "
//    CREATE TABLE IF NOT EXISTS categorias(
//        id SERIAL primary key,
//        nombre VARCHAR(100) unique not null,
//        descripcion TEXT
//    );
//
//    CREATE TABLE IF NOT EXISTS productos(
//        id SERIAL primary key,
//        nombre VARCHAR(100) unique not null,
//        categoria_id INTEGER references categorias(id),
//        precio decimal(10,2),
//        stock integer
//    );
//
//    CREATE TABLE IF NOT EXISTS usuarios(
//        id SERIAL primary key,
//        nombre VARCHAR(100) unique not null,
//        email VARCHAR(50) unique not null,
//        contrasena VARCHAR(255) not null
//    );
//
//    CREATE TABLE IF NOT EXISTS pedidos(
//        id SERIAL primary key,
//        usuario_id INTEGER references usuarios(id),
//        fecha DATE,
//        total decimal(10,2),
//        producto_id INTEGER,
//        cantidad INTEGER
//    );
//    ";
//
//    $pdo->exec($sql);
//    echo "Tablas creadas";


    //EJERCICIO 2

//    $stmt = $pdo->prepare('INSERT INTO categorias (nombre, descripcion) VALUES (?, ?)');
//
//    $stmt->execute(['Electrónica', 'Dispositivos y gadgets tecnológicos']);
//    $stmt->execute(['Ropa', 'Ropa, calzado y accesorios de moda']);
//    $stmt->execute(['Hogar', 'Artículos para el hogar y decoración']);
//    $stmt->execute(['Libros', 'Libros, novelas y material de lectura']);
//
//    echo "Categorías insertadas correctamente.<br>";
//
//    $stmt = $pdo->prepare('INSERT INTO usuarios (nombre, email, contrasena) VALUES (?, ?, ?)');
//
//    $stmt->execute(['juan_perez', 'juan@email.com', 'hash_pass_123']);
//    $stmt->execute(['ana_garcia', 'ana.g@email.com', 'hash_pass_456']);
//    $stmt->execute(['carlos_lopez', 'c.lopez@email.com', 'hash_pass_789']);
//    $stmt->execute(['maria_diaz', 'maria_d@email.com', 'hash_pass_abc']);
//
//    echo "Usuarios insertados correctamente.<br>";
//
//    $stmt = $pdo->prepare('INSERT INTO productos (nombre, categoria_id, precio, stock) VALUES (?, ?, ?, ?)');
//
//    $stmt->execute(['Laptop Pro 15"', 1, 1499.99, 15]);
//    $stmt->execute(['Smartphone Z', 1, 899.50, 40]);
//    $stmt->execute(['Auriculares Inalámbricos', 1, 120.00, 75]);
//    $stmt->execute(['Camiseta Básica Blanca', 2, 19.95, 200]);
//    $stmt->execute(['Vaqueros Slim Fit', 2, 59.90, 120]);
//    $stmt->execute(['Sofá 3 Plazas Gris', 3, 450.00, 10]);
//    $stmt->execute(['Set de Sartenes (3 piezas)', 3, 89.99, 50]);
//    $stmt->execute(['Lámpara de Escritorio LED', 3, 35.75, 60]);
//    $stmt->execute(['Elantris (Tapa Dura)', 4, 25.50, 90]);
//    $stmt->execute(['Cien Años de Soledad', 4, 18.00, 150]);
//
//    echo "Productos insertados correctamente.<br>";
//
//    $stmt = $pdo->prepare('INSERT INTO pedidos (usuario_id, fecha, total, producto_id, cantidad) VALUES (?, ?, ?, ?, ?)');
//
//    $stmt->execute([1, '2025-11-01', 1499.99, 1, 1]);
//    $stmt->execute([2, '2025-11-02', 79.85, 5, 1]);
//    $stmt->execute([2, '2025-11-02', 19.95, 4, 1]);
//    $stmt->execute([1, '2025-11-03', 120.00, 3, 1]);
//    $stmt->execute([3, '2025-11-04', 450.00, 6, 1]);
//    $stmt->execute([3, '2025-11-04', 35.75, 8, 1]);
//    $stmt->execute([4, '2025-11-05', 25.50, 9, 1]);
//    $stmt->execute([4, '2025-11-05', 18.00, 10, 1]);
//    $stmt->execute([2, '2025-11-06', 899.50, 2, 1]);
//    $stmt->execute([1, '2025-11-10', 59.90, 5, 1]);
//
//    echo "Pedidos insertados correctamente.<br>";


    //EJERCICIO 3

//    $stmt = $pdo->query( 'SELECT * FROM productos ORDER BY precio asc');
//    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC );
//
//    foreach ($productos as $p){
//        echo $p['nombre'] . ' - ' . $p['precio'] . "\n";
//    };
//
//
//    $stmt = $pdo->prepare( 'select * from productos p where categoria_id = ?');
//    $stmt->execute([1]);
//    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//    foreach ($productos as $p){
//        echo $p['nombre'] . ' - ' . $p['precio'] . "\n";
//    };
//
//
//
//    $stmt = $pdo->query( 'select * from productos where stock < 20;');
//    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//    foreach ($productos as $p){
//        echo $p['nombre'] . ' - ' . $p['precio'] . ' - ' . $p['stock'] . "\n";
//    };
//
//
//
//    $stmt = $pdo->query( 'select SUM(stock) from productos;');
//    $total = $stmt->fetchColumn();
//
//    echo "TOTAL STOCK: " . $total;


    //EJERCICIO 4
//
//    $stmt = $pdo->query('select p.nombre as nombre_producto, precio, c.nombre as nombre_categoria from productos p join categorias c on p.categoria_id = c.id order by c.nombre asc, p.precio asc;');
//    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC );
//
//    foreach ($productos as $p){
//        echo "Producto: " . $p['nombre_producto'] . ' - ' . $p['precio'] . " Categoria: " . $p['nombre_categoria'] . "\n";
//    };
//
//
//    //EJERCICIO 5
      //APARTADO A
//    $stmt = $pdo->prepare( 'update productos set precio = precio * 1.10 where categoria_id = ?;');
//    $stmt->execute([1]);
//    $filas = $stmt->rowCount();
//    echo 'Actualizados: ' . $filas;
//
//
       //APARTADO B
//    $stmt = $pdo->prepare( 'update productos set stock = stock - ? where id = ?;');
//    $stmt->execute([1, 3]);
//    $filas = $stmt->rowCount();
//    echo 'Actualizados: ' . $filas;

      //APARTADO C
//    $pdo->beginTransaction();
//
//    $stmt = $pdo->prepare( 'select stock from productos where id = ?;');
//    $stmt->execute([2]);
//    $res = $stmt->fetchColumn();
//
//    if($res - 4 > 0){
//        $stmt = $pdo->prepare( 'update productos set stock = stock - ? where id = ?;');
//        $stmt->execute([4, 2]);
//        $filas = $stmt->rowCount();
//        echo 'Actualizados: ' . $filas;
//        $pdo->commit();
//    }

    //EJERCICIO 6

//    $pdo->execute('alter table productos add eliminado integer;');
//    //Intepretamos eliminado = 1 para los productos eliminados y 0 para los que no
//    $pdo->execute('update productos set eliminado = 1 where stock = 0;');
//    //Las consultas select se modificarían incluyendo una clausula where eliminado = 0;
//    $stmt = $pdo->execute('select * from productos where eliminado = 0;');
//    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//    foreach ($productos as $p){
//        echo $p['nombre'] . ' - ' . $p['precio'] . "\n";
//    };

    //EJERCICIO 7
    $pdo->beginTransaction();

    echo "CREACIÓN DE PRODUCTO";
    $opc = 1;
    while($opc != 0){
        //Seleccion o creación de usuario si no existe
        $usuario = readline("Introduce id usuario");
        $stmt = $pdo->prepare( 'select id from usuarios where id = ?;');
        $stmt->execute([$usuario]);
        $res = $stmt->rowCount();
        if($res = 0){
            $pdo->execute('INSERT INTO usuarios VALUES ($usuario, "email@defaul.com", "pass1234")');
        }

        //Pedir productos y stock
        $pedir = 0;
        while($pedir != 0){
            //Muestro productos
            $stmt = $pdo->query( 'SELECT * FROM productos ORDER BY precio asc');
            $productos = $stmt->fetchAll(PDO::FETCH_ASSOC );
            $numeroDeProductos = $stmt->rowCount();

            foreach ($productos as $p){
                echo $p['id'] . ' - ' . $p['nombre'] . "\n";
            };
            //Guardo los productos en un array
            while($id_producto < 0 || $id_producto > $numeroDeProductos){
                echo "Escribe 0 para salir\n";
                $id_producto = readline("Selecciona id de producto");
            }
            $cant = readline("Cuánto quieres comprar?");
            $productos[] = ["id_producto" => $id_producto, "cantidad" =>$cant];
        }



    }




    //Comprebo si usuario existe
    $stmt = $pdo->prepare( 'select id from usuarios where id = ?;');
    $stmt->execute([2]);
    $res = $stmt->rowCount();
    if($res = 0){
        echo "El usuario no existe";
    }

    //Reciclo código del apartado C del ej5 para crear pedido y actualizar stock
    if($res - 4 > 0){
        $stmt = $pdo->prepare('INSERT INTO pedidos (usuario_id, fecha, total, producto_id, cantidad) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([1, '2025-11-2', 79.85, 5, 1]);

        $stmt = $pdo->prepare( 'update productos set stock = stock - ? where id = ?;');
        $stmt->execute([4, 2]);
        $filas = $stmt->rowCount();
        echo 'Actualizados: ' . $filas;
    }

    //El apartado 3 ya estaría hecho porque mi tabla pedidos incluye el total
    $pdo->commit();

} catch(PDOException $e) {
    $pdo->rollBack();
    echo $e->getMessage();
}