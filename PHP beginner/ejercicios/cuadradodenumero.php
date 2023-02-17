<?php
    /*
    Escribir un programa que imprima por pantall los cuadrados de los primero 4 numeros naturales
    postdata
    utilizar while
    
    */
    $contador = 0 ;
    while( $contador <= 40 ){
         $cuadrado = ($contador*$contador);
         echo "el cuadrado de $contador es $cuadrado";
         echo "<br>";
        $contador++;
    }

?>