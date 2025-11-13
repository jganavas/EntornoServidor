<?php
try {
    $dbh = new PDO('pgsql:host=localhost;port=5432;dbname=postgres;user=pepedb;password=1234');
    echo "PDO connection object created";

    $res = $dbh->query('SELECT * FROM productos');
    echo $res;

}
catch(PDOException $e)
{
    echo $e->getMessage();
}