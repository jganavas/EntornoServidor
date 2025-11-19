<?php
try {
    $dbh = new PDO('pgsql:host=localhost;port=5432;dbname=postgres', 'pepedb', '1234');
    echo "PDO connection object created\n";

    //3.1
    /*
    $stmt = $dbh->query( 'SELECT * FROM productos ORDER BY precio asc' ); $productos = $stmt->fetchAll(
        PDO::FETCH_ASSOC );

    foreach ($productos as $p){
        echo $p['nombre'] . ' - ' . $p['precio'] . "\n";
    };
    */

    //3.2
    /*
    $stmt = $dbh->prepare( 'select * from productos p where categoria_id = ?' );
    $stmt->execute([1]);
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($productos as $p){
        echo $p['nombre'] . ' - ' . $p['precio'] . "\n";
    };
    */

}
catch(PDOException $e)
{
    echo $e->getMessage();
}