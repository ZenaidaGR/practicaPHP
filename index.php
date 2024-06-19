<?php
echo "My first PHP script!";
echo "<br>";
echo "Mis datos";
$nombre = "Zenaida González";
$edad = 18;
$estatura = 1.64;
echo " Soy ... " . strtoupper($nombre) . " Tengo " . $edad . " años y mido " . $estatura . "metros"; 
echo "<br>";
var_dump($nombre);
echo "<br>";

$x = 34;
$y = 356.78;

$suma = $x + $y;
echo "La suma de $x + $y = $suma"; echo "<br>";

$resta = $x - $y;
echo "La resta de $x - $y = $resta"; echo "<br>";

$multiplicacion = $x * $y;
echo "La multiplicacion de $x * $y = $multiplicacion"; echo "<br>";

$divicion = $x / $y;
echo "La suma de $x / $y = $divicion"; echo "<br>";


echo "Un numero aleatorio "; echo(rand()); echo "<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas PHP</title>
</head>
<body>
    Hola!!
</body>
</html>