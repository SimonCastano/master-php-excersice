<?php

//condicionales if
/*if(condicion){
 algo que pase si se cuimple la condicion
}elser{
    si no se cumple pasa esto
}*/


// operadores de comparacion
/* 

== que si es igual
=== que es identico en todo sentido
!= diferente
<> tambien es diferente
!== no identico
> mayor que
> menor que
<= menor o igual 
>= mayor o igual

*/


$color = 'asd';
        if($color == 'rojo'){
            echo ('color es '. $color);
        }else{
            echo ('color no es'. $color);
        }


        echo '<br>';
        echo '<br>';

$year = 2024;
if($year < 2023){
    echo '<br>';
    echo '<h1>Estamos en el 2023<h1/>';
    echo '<br>';
}else{
    echo '<br>';
    echo '<h1> NO estamos en el 2023<h1/>';
    echo '<br>'; 
}

echo '<h1>------<h1/>';
echo '<hr>';
$dia = 1;
echo '<h1>ejemplo con if<h1/>';
if($dia == 1){
    echo '<br>';
    echo '<h1>Es lunes<h1/>';
    echo '<br>';
}elseif ($dia == 2){
    echo '<br>';
    echo '<h1>Es MArtes<h1/>';
    echo '<br>';
}elseif ($dia == 3){
    echo '<br>';
    echo '<h1>Es MArtes<h1/>';
    echo '<br>';
}elseif ($dia == 4){
    echo '<br>';
    echo '<h1>Es MArtes<h1/>';
    echo '<br>';
}elseif ($dia == 5){
    echo '<br>';
    echo '<h1>Es MArtes<h1/>';
    echo '<br>';
}elseif ($dia > 5){
    echo '<br>';
    echo '<h1>Es finde<h1/>';
    echo '<br>';
}

echo '<hr>';
echo '<h1>ejemplo con switch-<h1/>';

$day = 3;
switch ($day) {
    case 1:
        echo "hoy es  lunes";
        break;
    case 2:
        echo "hoy es  martes";
        break;
    case 3:
        echo "hoy es  miercoles";
        break;
    case 4:
        echo "hoy es  jueves";
        break;
    case 5:
        echo "hoy es  viernes";
        break;
    default :
        echo "finde semana";
        break;
}
