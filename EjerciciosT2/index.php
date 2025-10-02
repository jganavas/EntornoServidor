<?php include("./config/config.php"); ?>
<?php include("./includes/header.php");?>
<?php

$pagina = $_GET["index"] ?? "home";
$acerca = $_GET["acerca"] ?? "home";
$contacto = $_GET["contact"] ?? "home";

include("./{$pagina}.php");
include("./{$acerca}.php");
include("./{$contacto}.php");

?>
    <div class="contenedor">
        <h1>Hola</h1>
        <h2>Mi nombre es <?php echo nombre?></h2>
        <h3>La fecha es <?php echo fecha?></h3>
        <h3><?php echo hora?></h3>
    </div>
<?php include("./includes/footer.php");?>