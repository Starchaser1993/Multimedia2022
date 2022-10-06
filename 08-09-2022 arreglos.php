<?php

//Arreglos

//Ejemplo 1 
$arreglo = array("Pedro","Juan","Diego");
echo "<pre>"
print_r($arreglo);
echo"</pre>";

//Ejemplo 2
$arreglo_2 = array(
    "Juan"=>"Perez",
    "Pedro" => "Gonzalez",
    "María" => "Lopez"
);

echo "<pre>"
print_r($arreglo);
echo"</pre>";

$arreglo_2 = array(
    "Juan"=>"Perez",
    "Edad" => 20,
    "Estatura" => 12.5
);

//Iterar un arreglo
$arreglo_3 [
    "nombre" => "Juan Perez",
    "edad" => 21,
    "ocupacion" => "Desarrollador Web"
];

foreach($arreglo_3 as $key => $value){
    echo $key . ": ". $value . "<br>";
}

//arreglo de arreglos
$arreglo_4 = [
    [
        "nombre" => "Juan Perez",
        "edad" => 21,
        "ocupacion" => "Desarrollador Web"
    ],
    [
        "nombre" => "Pedro",
        "edad" => 36,
        "ocupacion" => "Vendedor"
    ],
    [
        "nombre" => "Diego",
        "edad" => 25,
        "ocupacion" => "Estudiante"
    ]
    ];
    foreach($arreglo_4 as $key => $value){
        foreach($value as $key_2 => $value_2){
            echo $key_2 . ": " . $value_2;
        }
        echo "<hr>";
    }
/*
    <ul>
    <li>
    $arreglo_5 = [
        [
            "nombre" => "Juan Perez",
            "edad" => 21,
            "ocupacion" => "Desarrollador Web"
        ],
        [
            "nombre" => "Pedro",
            "edad" => 36,
            "ocupacion" => "Vendedor"
        ],
        [
            "nombre" => "Diego",
            "edad" => 25,
            "ocupacion" => "Estudiante"
        ]
        ];
        foreach($arreglo_5 as $key => $value){
            foreach($value as $key_3 => $value_3){
                echo $key_3 . ": " . $value_3;
            }
            echo "<hr>";
        }
    
</li>

</ul>*/

