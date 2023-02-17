<?php

//para debuguear resukltado de un avariable y tipo de dato
$variable = "simon". "<br>";
var_dump($variable);


// para fechas y le puedo pasar diferentes formatos
echo date('d-m-Y H'). "<br>";

// Prints the day
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A"). "<br>";
echo "<br>";
echo time();


echo "<br>";
//------------funciones matematicas

//raiz cuadrada
echo "raiz cuadrada de 8: es = ".sqrt(8);
echo "<br>";
//numero aleatorios
echo " <h2> Numero aleatorio entre 10 y 40: ".rand(10, 40)."</h2><br>"; //ambos valores son opcionales
//funcion para sacar pi
echo "Numero pi = ".pi();

//para redondear cifras de float a numero entero
echo "<br>";
echo "<br>";
echo "Redondear una sifra decimal 7.5588:<strong> ".round(7.5588)."</strong>";
//como segundo parametro puedo decir el numero de decimales que quiero
echo "<br>";
echo "<br>";
echo "Redondear una sifra decimal 7.5588: <strong> ".round(7.5588, 3)."</strong>";

//mas funciones generales

echo "<br>";
echo "<br>";
echo "<h2>mas funciones generales</h2>";
echo "sacar el tipo con gettype() ".gettype($variable);
echo "<br>";

if(is_string($variable)){
    echo "la variable es un string";
    echo "<br>";
}

if(!is_float($variable)){
    echo "la variable no es un number";
    echo "<br>";
}
echo "<br>";
echo "<br>";


//isset variable me ayuda a ver si una variable existe denrto de la aplicacion
if(isset($edad )){
    echo "la variable existe";
}else{
    echo "la variable no existe";
    echo "<br>";
}
echo "<br>";
//funcion trim para cortar espacios por delante o por detras por error de dedo
$frase = "      arbol que nace torcido jamas su rama endereza         ";
var_dump($frase);//esta tiene mas caracteres 60 caracteres
echo "<br>";
var_dump(trim($frase));//esta elimina los espacios que no aportan 45 caracteres


//cariable unset sirve para eliminar variavles
$happy = "hola";
unset($happy);
// echo $happy;


?>