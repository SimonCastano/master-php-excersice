<?php

//abrir archivo
$archivo= fopen('fichero_texto.txt','r');

//leer archivo
$contenido = fgets($archivo);
echo $contenido;

//cerrar archivo
fclose($archivo);

?>