<?php

// La carpeta 'public' es donde suelen vivir imágenes, CSS y JS.
// Si tus imágenes están en la raíz, puedes quitar '/public'.
$publicDir = __DIR__;
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$filePath = $publicDir . $url;

// 1. Comprobar si es un archivo estático que existe
if (is_file($filePath)) {
    // Si es un archivo, sírvelo directamente.
    // Esta es la parte clave: 'return false' le dice al servidor
    // de PHP que sirva el archivo tal cual.
    return true;
}

// 2. Si no es un archivo, carga tu index.php para las URLs amigables
// (Esto asume que tu lógica principal está en index.php)
require_once $publicDir . '/index.php';
?>
