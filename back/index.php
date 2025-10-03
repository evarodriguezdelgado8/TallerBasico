//Servidor de aplicaciones


<?php

define("PI", 3.1416);
echo PI;


$Nombre = "Carlos";

$nombre = "Eduardo";

echo $Nombre;
echo $nombre;


//Indexado
$frutas=["limon", "pera"];

//Asociativo
$personas=["nombre" => "Juan", "edad" => 30];


class Persona {
    public $nombre;
    public $edad;
}

$oNombre = new Persona();
$oNombre -> nombre = "Juan";
$oNombre -> edad = 30;

echo $oNombre -> nombre;
echo $oNombre -> edad;


//Paara pintar el objetos entero
var_dump($oNombre);

?>