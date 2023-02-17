<?php
 if(isset($_GET['error'])){
    $error =  $_GET['error'];
    if($error == 'faltan datos'){
        echo "<p>Error: <strong style='color:red;'>$error</strong></p>";
    }elseif( $error =="Error en el nombre"){
        echo "<p>Error: <strong style='color:red;'>$error</strong></p>";
    }elseif( $error =="Error en el nombre"){
        echo "<p>Error: <strong style='color:red;'>$error</strong></p>";
    }elseif( $error =="Error en el Apellido"){
        echo "<p>Error: <strong style='color:red;'>$error</strong></p>";
    }elseif( $error =="Error en la edad"){
        echo "<p>Error: <strong style='color:red;'>$error</strong></p>";
    }elseif( $error =="Error en el email"){ 
        echo "<p>Error: <strong style='color:red;'>$error</strong></p>";
    }elseif( $error =="Error en la contraseña debe ser mas larga") { 
        echo "<p>Error: <strong style='color:red;'>$error</strong></p>";
    }
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
    <h1>Validacion de formulario</h1>
    <form action="procesar_formulario.php" method="POST"> 
        <div class="input_box">
            <label for="Nombre">Nombre</label><br>
            <input type="text" placeholder="Nombre" id="Nombre" name="Nombre">
        </div>
        <br>
        <div class="input_box">
            <label for="Apellidos">Apellidos</label><br>
            <input type="text" placeholder="Apellidos" id="Apellidos" required pattern="[A-Za-z]+" name="Apellidos">
        </div>
        <br>
        <div class="input_box">
            <label for="Edad">Edad</label><br>
            <input type="number" placeholder="Edad" id="Edad" required pattern="[0-9]+" name="Edad">
        </div>
        <br>
        <div class="input_box">
            <label for="Edad">Email</label><br>
            <input type="email" placeholder="Email" id="Email" required  name="Email">
        </div>
        <br>
        <div class="input_box">
            <label for="Contraseña">Contraseña</label><br>
            <input type="password" placeholder="Contraseña" id="Contraseña" required  name="Contrasena">
        </div>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>