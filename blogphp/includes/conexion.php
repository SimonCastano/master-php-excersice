<?php

// variables para poder cambiar facilmente al momento de subir a produccion
$sever = 'localhost';
$username = 'root';
$password = '';
$database = 'blog';

// new mysqli es la funcion para conectarse
$db = new mysqli(
    $sever,
    $username,
    $password,
    $database
);


// Verificar conexión
/*
if ($db->connect_error) {
    die("Conexión fallida: " . $db->connect_error);
}

echo "Conexión exitosa";
*/

mysqli_query($db, "SET NAMES 'utf8'");


//iniciar una sesion para guardar parametros
session_start();
?>