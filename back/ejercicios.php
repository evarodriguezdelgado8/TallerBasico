<?php
//Define variables de distintos tipos: un entero, un flotante, una cadena y un booleano. Luego imprime el valor y tipo de cada variable utilizando la función var_dump().

$nombre = "Eva";
$apellido1= "Rodriguez";
$apellido2= "Delgado";
$edad = 26;
$altura = 1.76;
$soltero= false;

var_dump($nombre);
echo "<br></br>";
echo "<br></br>";

var_dump($nombre,$apellido1, $apellido2);
echo "<br></br>";
echo "<br></br>";

var_dump($edad);
echo "<br></br>";
echo "<br></br>";

var_dump($altura);
echo "<br></br>";
echo "<br></br>";

var_dump($soltero);
echo "<br></br>";
echo "<br></br>";

//Crea un array asociativo que contenga información de una persona (nombre, edad, ciudad).

$aPersona = ["nombre" => "Eva", "apellido1" => "Rodriguez", "apellido2" => "Delgado", "edad" => 26, "altura" => 1.76, "soltero" => false];
var_dump($aPersona);

//Define una constante llamada NOMBRE_CURSO con el valor "Programación PHP" y muestra su valor en pantalla.

define("NOMBRE_CURSO", "Taller básico de PHP");

//Crea una función que reciba un array de números y devuelva la suma de todos sus elementos. Llámala con un array de ejemplo y muestra el resultado.




//Declara una variable con el valor null y utiliza la función is_null() para verificar si la variable tiene valor null.
$tipoNull=Null;
echo "<br></br>";
echo "<br></br>";
if(is_null($tipoNull)){

    echo "Es nulo";
}



//Defina dos variables con valores numéricos y realice operaciones aritméticas básicas (suma, resta, multiplicación, división, módulo).

$num1= 10;
$num2 = 5;

echo $num1


//Use operadores de comparación para verificar si una variable es mayor, menor o igual que la otra.


//Usa un operador ternario para determinar si una variable es par o impar.


//Aplica operadores lógicos para verificar si ambas variables son mayores de 10 y muestra un mensaje dependiendo del resultado.


//Implementa operadores de incremento y decremento y muestra cómo cambian los valores de las variables.
?>


<?php




?>