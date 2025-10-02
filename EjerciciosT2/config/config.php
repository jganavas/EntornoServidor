<?php
//RUTAS
define("index", "../index.php?pagina=index");
define("sobremi", "../index.php/pages/acerca=sobremi");
define("contacto", "../index.php?contact=contacto");

//VARIABLES
const nombre = "Pepe";
const edad = 26;
const ciudad = "Granada";
const titulo = "Ejercicios";

//FECHA Y HORA
date_default_timezone_set("Europe/Madrid");
define("fecha", date("d/m/Y"));
define("hora", date("h:i:s"));



