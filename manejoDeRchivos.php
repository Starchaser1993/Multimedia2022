<?php

//Modo de apertura de archivos
//r solo lectura
//r+ lectura y escritura
//w solo escritura.sobreescribe el archivo si existe. Crea el archivo si no existe
//a Añadido (agregar contenido). Crea el archivo si este no existe
//a+ Añadido (agregar contenido) y lectura. Crea el archivo si este no existe   

//Leer archivo
$archivo = fopen("archivos/archivo.txt","r");

while(!feof($archivo)){
    echo fgets($archivo) . "<br>";
}
fclose($archivo);

//Escribir archivo
$archivo = fopen("archivos/archivo_2.txt", "w");
fwrite($archivo, "Este es una linea de código" . PHP_EOL);
fwrite($archivo, "Otra línea" .PHP_EOL);
fclose($archivo);
?>
