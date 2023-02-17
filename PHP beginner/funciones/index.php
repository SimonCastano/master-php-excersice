<?php

/*  
Funciones son fromas de agrupar 
una serie de instrucciones para no tener que repetir el codigo y llamarla cuando sea necesario
podemos tener toda la logica y la complegidad que necesitemos

y la podemos reutilizaR LAS VECES que necesitamos

para declarrla:
function nombreDeMiFuncion($parametros){
    bloque de instricciones
}

para llamarla:
nombreDeMiFuncion($parametros)

*/
function muestraNombres(){
    echo "Andres";
    echo "<br>";
    echo "simon";
    echo "<br>";
    echo "victor";
    echo "<hr>";
}

muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres();

//ejemplo 2 con un parametro

function tablaMultiplicar($number){
    echo "<h3>Tabla de multiplicar del $number</h3><br>";
    for( $i = 1; $i <= 10; $i++){
        $operacion = ($number*$i);
        echo"$i x $number = $operacion";
        echo"<hr>";
    }
}

tablaMultiplicar(2);
tablaMultiplicar(12);

echo "<h1>imprimir todas las tablas usado ciclos y funciones</h1>";

//como reutilizar mejor

for ($i = 0; $i <= 10; $i++) {
    tablaMultiplicar($i);
    echo"te amo mi amor";
}



?>