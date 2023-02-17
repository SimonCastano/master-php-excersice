<?php
/*
una cookie es un fichero que guarda informacion en el dispositivo del usuario
 y manda informacion al servidor
son visibles desde el cliente y ademas son manipulables
*/

//setcookie("valo que solo puede ser texto", caducidad, ruta, dominio)

//cookie basica
setcookie('micookie', 'valor de mi cokkie simon');

//cookie con espiracion 
setcookie('misegundacokkie', 'valor de mi segunda cokkie', time()+(60*60*24*365));


?>
<h1>crear cookie</h1>
<a href="vercookie.php">Ver las cokies creadas por mi</a>