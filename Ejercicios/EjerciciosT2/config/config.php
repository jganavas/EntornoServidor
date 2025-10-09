<?php
//RUTAS
const index = "../index.php";
define("sobremi", "../pages/sobremi.php");
define("contacto", "../pages/contacto.php");

//VARIABLES
const nombre = "Pepe";
const edad = 26;
const ciudad = "Granada";
const titulo = "Ejercicios";

//FECHA Y HORA
date_default_timezone_set("Europe/Madrid");
define("fecha", date("d/m/Y"));
define("hora", date("h:i:s"));



