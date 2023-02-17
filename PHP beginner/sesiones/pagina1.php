<?php

session_start();

echo $variable_normal;
echo "<br> ";
echo $_SESSION['variable persistente'];

//session_destroy() para cerrar sesion

