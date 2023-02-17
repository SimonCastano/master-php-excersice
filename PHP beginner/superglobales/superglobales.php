<?php

//variables superglobales de servidor

//direccion ip del servidor 
//con ipconfig si pones tu rieccion local te la muetra
echo "<h1>";
echo $_SERVER['SERVER_ADDR'];   
echo "<h1/>";
echo "<br/>";
echo "<h1>";
//name
echo "<h1>";
echo $_SERVER['SERVER_NAME'];   
echo "<h1/>";
echo "<br/>";
//software
echo "<h1>";
echo $_SERVER['SERVER_SOFTWARE'];   
echo "<h1/>";
echo "<br/>";
//HOST
echo "<h1>";
echo $_SERVER['HTTP_HOST'];    
echo "<h1/>";
echo "<br/>";
//HOST
echo "<h1>";
echo $_SERVER['HTTP_USER_AGENT'];    
echo "<h1/>";
echo "<br/>";
//DIRECCION IP DEL CLIENTE
echo "<h1>";
echo $_SERVER['REMOTE_ADDR'];     
echo "<h1/>";
echo "<br/>";


?>