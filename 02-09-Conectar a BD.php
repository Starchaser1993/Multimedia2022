<?php

//conexion 

//1.- Conexion
$host = "localhost";
$user = "root";
$pass = "";
$db = "Multimedia2022";
$conexion = mysqli_connect($host, $user, $pass, $db);
print_r ($conexion); 

//2 consulta base de datos
$consulta = ";SELECT * FROM usuarios";

//3-Ejecutar consulta
$resultado = mysqli_query($conexion, $consulta);

//mostrar resultados
//forma 1

while($fila = mysqli_fetch_assoc($resultado)){
    echo $fila["nombre"] . " " . $fila["apellido"] . "<br>";
}

//forma 2
while($fila = mysqli_fetch_assoc($resultado)){
    foreach ($fila as $llave => $valor) {
        echo $valor. " ";
    }
    echo"<br>";
}

