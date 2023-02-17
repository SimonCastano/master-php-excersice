<?php

$peliculas = array('batman ', 'superman ', 'the puss in boots');
echo "<br>";
echo (var_dump($peliculas));
echo "<br>";
echo "<br>";
$frutas = ['aguacate', 'pera', 'mazana', 'banano'];
echo (var_dump($frutas));
echo "<br>";
echo "<br>";
echo "$frutas[1] dasda $peliculas[0]";

echo "<br>";
echo "<br>";
//recorer aray con for
echo "<h1> Listado de peliculas</h1>";
echo "<ul>";
for($i=0; $i <count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
    echo "<br>";
}
echo "</ul>";

echo "<br>";

echo "<br>";
echo "<h1> Listado de furtas</h1>";
echo "<ul>";
//recorrer con forechs
foreach($frutas as $fruta){
    echo "<li>".$fruta."</li>";
    echo "<br>";
    echo "<br>";
}
echo "</ul>";


//array asociativo es donde tu l¿en lugar de usar numero asignas tu propio key

$person = array(
    'nombre' => 'simon',
    'apellidos' => 'castaño',
    'contrasena' => '321',
    'estado' => 'married',
);
error_reporting(0);
var_dump($person);
echo "<br>";
echo $person['nombre'];
echo "<br>";
echo $person['apellidos'];
echo "<br>";
echo $person['contrasena'];
echo "<br>";
echo $person['estado'];
echo "<br>";


echo "<hr>";

$cantantes= ['2pac', 'Drake', 'Jennifer','Lopez', 'Alfredo'] ;
$numeros = [1,2,5, 8, 3,4] ;
// ordenar
sort ($numeros) ;
var_dump ($numeros) ;
// Añadir elementos array
$cantantes[] = "Natos";
array_push ($cantantes, "Waor") ;
// Eliminar elementos array
array_pop ($cantantes) ;
unset ($cantantes [2]) ;
//Aleatorio
echo array_rand ($cantantes);
var_dump($cantanEes)
?>