<?php 
    // esto es un comentario de  una linea
    # Esto es tambien un comentario 

    /*
    Este es un bloque de multiples lineas
    */

?>


<?php
    $nombre = "juan";
    $edad = 20; 

    echo $nombre // Imprime: juan 

?>


<?php   
    define("pi",3.1416);
    const SALUDO = "hola";
    echo PI; // imprime: 3.1416



  
    $frutas = ["Manzana","Banano","Uva"];

    echo $frutas[0]; // Imprime: Manzana 
    echo $frutas[2]; // Imprime: Uva 
?>


<?php 
    $persona = [
        "nombre" => "Ana",
        "edad" => 25,
        "ciudad" => "Bogotá"
    ];
    echo $persona ["nombre"]; // Imprime:ana
?>

<?php
$a = 10;
$b = 5;

echo $a + $b; // + suma → sirve para sumar valores
echo $a - $b; // - resta → sirve para restar
echo $a * $b; // * multiplicación → sirve para multiplicar
echo $a / $b; // / división → sirve para dividir
echo $a % $b; // % módulo → sirve para obtener el residuo
?>


<?php
$x = 10;   // = asignación → sirve para guardar un valor

$x += 5;   // += suma y asigna → agrega 5
$x -= 3;   // -= resta y asigna → resta 3
$x *= 2;   // *= multiplica y asigna
$x /= 4;   // /= divide y asigna
?>


<?php
$a = 10;
$b = 5;

var_dump($a == $b);  // == igual → compara si son iguales
var_dump($a != $b);  // != diferente → compara si son distintos
var_dump($a > $b);   // > mayor que → compara si es mayor
var_dump($a < $b);   // < menor que → compara si es menor
var_dump($a >= $b);  // >= mayor o igual
var_dump($a <= $b);  // <= menor o igual
?>


<?php
$a = true;
$b = false;

var_dump($a && $b); // && AND → sirve si ambas condiciones son verdaderas
var_dump($a || $b); // || OR → sirve si al menos una es verdadera
var_dump(!$a);      // ! NOT → invierte el valor (true a false)
?>


<?php
$x = 5;

$x++; // ++ incremento → aumenta 1
$x--; // -- decremento → disminuye 1
?>