<?php

class NombreClase{
    // Atributos
    //public puede ser accedido fuera de la clase, dentro de la misma y ser heredada 
    //private solo puede ser accedida dentro de la misma clase
    // protected: puede ser accedida dentro de la clase y puede ser heredada
    public $atributo1;
    private $atributo2;
    protected $atributo3;

    //constructor
    public function __construct($param1,$param2){
        $this->atributo1 = $param1; //acceder a un atributo dentro de una clase
        $this->atributo2 = $param2;
    }

//cuando el profe dice metodo, es funcion dentro de una clase

//Metodos
public function NombreMetodo(){
    echo "<br> Hola desde un metodo de la clase <br>";


}
}
//Instanciar la clase
$nombreClase = new NombreClase("Hola", "Mundo");

//Lamar a un metodo de la clase
$nombreClase->NombreMetodo();

$nombreClase->atributo1;

echo $nombreClase->atributo1;
