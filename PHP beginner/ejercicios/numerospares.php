<?php
/* 

Ejercio2 
imprime por pantalla todos los numeros del uno al 100 pero solo los que sean pares

*/ 

$num = 1;

while($num<101){
    $modulo = ($num%2);
    if($modulo == 0){
        echo $num;
        $num++;
        echo '<br>';
    }else{
        $num++;
        echo '<br>';
    }
}

//----forma facil de resolverlo pero no las mas optima
// while ($num < 51){
//     echo $num * 2;
//     $num++;
//     echo '<br>';
// };

?>