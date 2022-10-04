<?php
// Glosario de PHP
// Camel-case
// Estructura basica de los lenguajes
// Que es un seudo-Lenguaje / un lenguaje de programación
// Codigo limpio / Codigo sucio
// Variables
// Maneras de escribir las variables en PHP
// 7 tipos de datos primitivos en PHP
// Declarar de Variable / Inicializacion de variable
// Punto y coma
// Palabras reservadas del sistema
// Que son los operadores
// Items en las colecciones de datos PHP
// echo / var_dump / print_r

header('Access-Control-Allow-Origin: *');

// Declarar variables con $
$nombreCompleto = "César Augusto Navas Serrano";
$edad = 48;
$altura = 1.74;
$soyProfesor = false;
$pasatiempo = ["Jugar futbol", "Compartir en familia", "Ver peliculas", "Hablar"];
$direccion = new stdClass();
$direccion->principal = "Carrera 1";
$direccion->secundaria = "Avenida 28";

echo($nombreCompleto);
echo("<br>");
echo($edad);
echo("<br>");
echo($altura);
echo("<br>");
var_dump($soyProfesor);
var_dump($pasatiempo);
var_dump($direccion);

echo "<br>Soy el servisor ".$_SERVER['HTTP_HOST']." gracias por conectarme :)";
?>

