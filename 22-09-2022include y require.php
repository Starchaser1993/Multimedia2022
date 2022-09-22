<?php

// include
//cuando el include no encuentra un archivo, arroja un warning
include("22-09-2022Archivo a incluir.php");

echo"<br>";

// require
//cuando no encuentra el archivo, arroja un fatal error
require("22-09-2022Archivo a incluir.php");

echo "<br> Soy el final del archivo";

//Include once
include_once("22-09-2022Archivo a incluir.php");

//require once---se aconseja usar este
require_once("22-09-2022Archivo a incluir.php");