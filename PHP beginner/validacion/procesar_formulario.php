<?php
 $error = " ...";

if (
    !empty($_POST['Nombre']) && 
    !empty($_POST['Apellidos']) && 
    empty($_POST['Edad']) && 
    !empty($_POST['Email']) &&
    !empty($_POST['Contrasena'])
    ){

    $error ="OK";
    // $nombre = $_POST['Nombre'];
    // $apellido = $_POST['Apellidos'];
    // $edad = (int) $_POST['Edad'];
    // $email = $_POST['Email'];
    // $pass = $_POST['Contrasena'];
    // if(!is_string($nombre) || !preg_match("/[0-9]+/", $nombre)){
    //     $error ="Error en el nombre";
    // }
    // if(!is_string($apellido) || !preg_match("/[0-9]+/", $apellido)){
    //     $error ="Error en el Apellido";
    // }
    // if(!is_int($edad) || filter_var($edad, FILTER_VALIDATE_INT)){
    //     $error ="Error en la edad";
    // }
    // if(!is_string($email) || filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     $error ="Error en el email";
    // }
    // if(strlen($pass) < 1){
    //     $error = "Error en la contraseña debe ser mas larga";
    // }
    // if($error !="OK"){
    //        header('location:index.php?error='.$error);
    // }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacion</title>
</head>
<body>
    <h1>validacion</h1>
    <?php if ($error ==="OK"):?>
        <h2>Nombre: <?=$nombre?> </h2>
        <p>Apellido: <?=$apellido?></p>
        <p>Edad: <?=$edad?></p>
        <p>Correo:<a href="mailto:<?=$email?>"> <?=$email?></a></p>

    <?php endif ?>


    
</body>
</html>