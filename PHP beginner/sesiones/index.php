<?php

///unsa sesion guarda persiste datos hasta que se cierre el navegador o se cierre la sesion
//todo se guarda en el servidor es muy seguro por que no se muestra al cliente
//lo malo es que cuando cierras navegador se elimina la 

session_start();//con esto inicio una session

//variable normal
$variable_normal= 'soy un texto';

//variable de sesion
$_SESSION['variable persistente'] = "hola soy una sesion activa";

echo $variable_normal;
echo "<br> ";
echo $_SESSION['variable persistente'];