<?php

/*
Casting
Es cuando forzamos a un tipo de dato que se convierta en otro
*/

$numero_string = "J"; //String
var_dump($numero_string);
echo "<br>";

$numero_int = (int) $numero_string; //Integer
var_dump($numero_int);
echo "<br>";

$numero_float = (float) $numero_string;
var_dump($numero_float);
echo "<br>";

$dias = 5.85;
$dias = (int) $dias; //Integer
var_dump($dias);
echo "<br>";

$bandera = 0;
$bandera = (bool) $bandera;
var_dump($bandera);
echo "<br>";
// falso cuando es 0 ó vacío
// verdadero cuando es distinto de 0 y tiene contenido