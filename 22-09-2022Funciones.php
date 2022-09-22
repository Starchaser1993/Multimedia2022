<?php

//Declarar funcion
function NombreFuncion(){
    echo "Hola desde una función";
}
"<br>";
//Llamar a la funcion
NombreFuncion();
echo "<br>";
//Funcion con parámetros
function funcionParametros($parametro1,$parametro2){
echo $parametro1;
echo "<br>";
echo $parametro2;
}
funcionParametros("Juan", "Perez");

//Funcion con retorno
function funcionRetorno($parametro1, $parametro2){
    $resultado =$parametro1 + $parametro2;
    return $resultado;
}

echo "<br>";
$suma = funcionRetorno(5, 10);
echo "El resultado de la suma es $suma";

//funion parametros por defecto
function funcionParametrosDefault($param1 = 10, $param2 = 5){
    $resultado = $param1 - $param2;
    return $resultado;
}
//en el parentesis al lado del default se puede alterar la suma o la resta (20,2)
$resta = funcionParametrosDefault();
echo "<br>";
echo "La resta es $resta";
