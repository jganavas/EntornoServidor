<?php
// Incluir configuración
require_once("./config/config.php");

// Páginas permitidas (definir PRIMERO)
$allowed_pages = ['home', 'sobremi', 'contacto'];

// Obtener la página solicitada (por defecto 'home')
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// SANITIZAR: Validar que la página está en la lista permitida
if (!in_array($page, $allowed_pages, true)) {
    $page = 'home'; // Si no existe, redirigir a home
}

// Construir la ruta del archivo
$page_file = "./pages/" . $page . ".php";
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo TITULO; ?></title>
    <link rel="icon" href="./assets/img/logohead.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/styles.css" rel="stylesheet"/>
</head>
<body>
    <?php include("./includes/header.php"); ?>
    
    <main>
        <?php 
        // Cargar la página solicitada (ya validada en whitelist)
        include($page_file);
        ?>
    </main>
    
    <?php include("./includes/footer.php"); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
