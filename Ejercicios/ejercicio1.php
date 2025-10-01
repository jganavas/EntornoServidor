<?php include("header.php");?>
<?php
    $nombre  = "Pepe";
    $edad = 26;
    $ciudad = "Granada";
    date_default_timezone_set("Europe/Madrid");
    $fecha = date("d/m/Y");
    $hora = date("h:i:s");
?>
    <main>
        <div class="contenedor">
            <h1>Hola</h1>
            <h2>Mi nombre es <?php echo $nombre?></h2>
            <h3>La fecha es <?php echo $fecha?></h3>
            <h3>La hora es <?php echo $hora?></h3>
        </div>
    </main>

<?php include("footer.php");?>