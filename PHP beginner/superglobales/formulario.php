<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en php</title>
</head>
<body>

    <h1>formulario en php</h1>
    <form action="./recibir.php" method="GET">
        <input type="text" placeholder="Nombre" name="nombre"> <br> <br>

        <input type="number" placeholder="Telefono" name="numero"> <br> <br>

        <input type="password" placeholder="Contraeña" name="password"> <br> <br>
            <input type="submit" value="Eviar datos" name="">
    </form>
    
</body>
</html>

<?php

?>