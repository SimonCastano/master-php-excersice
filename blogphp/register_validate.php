<?php

if (isset($_POST)){
  
    require_once 'includes/conexion.php';
    
    //recoger los valores del formulario de registro en variables
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, trim($_POST['nombre'])) :false;
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($db, trim($_POST['apellido'])) :false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) :false;
    $contraseña = isset($_POST['pass']) ? mysqli_real_escape_string($db, trim($_POST['pass'])) :false;

    // creamos un array que recoge los errores
    $errors = [];
    //validar informacion antes de guardarlo
    //----------------------------------------------------------------
    //Validar nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/0-9/", $nombre)){
        $nombre_validate = true;

    }else{
        $nombre_validate = false;
        $errors['nombre'] = "el nombre no es valido"; 
    }

    //validar appelido
    if (!empty($apellido) && !is_numeric($apellido) && !preg_match("/0-9/", $apellido)){
        $apellido_validate = true;

    }else{
        $apellido_validate = false;
        $errors['apellido'] = "el apellido no es valido"; 
    }

    //validar email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errors['email'] = "el email no es valido"; 
    }

     //validar contraseña
     if (!empty($contraseña)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errors['password'] = "rellena la contraseña por favor"; 
    }
    
    $save_user = false;
    if(count($errors)== 0){
        //aqui va el codigo para insertar usuarios en la base de datos
        $save_user = true;
        //cifrar contraseña en la base de datos
        $secure_password = password_hash($contraseña, PASSWORD_BCRYPT, ['costo' => 5]);


        // echo $contraseña;
        // echo"<br>";
        // echo $secure_password;
        // echo"<br>";
        // echo"<br>";
        // echo password_verify($contraseña, $secure_password);


        $sql="INSERT INTO `usuarios`(`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES (null,'$nombre', '$apellido','$email','$secure_password', CURDATE());";
        $create_user = mysqli_query($db ,$sql);

        if($create_user){
            $_SESSION['userCreated'] = "usuario creado correctamente"; 
       
        }else{
            $_SESSION['errors']['general'] = "fallo desconocido al crear el usuario";
        
        }
    }else{
        $_SESSION['errors'] = $errors;
        
    }
    
    
    
}else{
    echo "no ha llegado la informacion";
}
header('location:register.php');

?>


