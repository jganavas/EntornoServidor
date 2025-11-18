<?php
try {
    $dbh = new PDO('pgsql:host=localhost;port=5432;dbname=postgres;user=pepedb;password=1234');
    echo "PDO connection object created";

    $res = $dbh->query('SELECT * FROM productos');
    $productos = $res->fetchAll(PDO::FETCH_ASSOC);
    print_r($productos);

}
catch(PDOException $e)
{
    echo $e->getMessage();
}