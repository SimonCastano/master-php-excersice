<?php
//iniciar sesion e incluir conexion
require_once 'includes/conexion.php';
//recoger datos del fomulario

if (isset($_POST)){
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }



    // Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    //comprobar contraseña

    // Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);


    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);

        // Comprobar la contraseña
        $verify_password = password_verify($password,$usuario['password']);

        if($verify_password){
            //usar una sesion para guardar los datos del usuarios
            $_SESSION['user']=$usuario;
            
        }else{
			// Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login']= "Error en el inicio de sesion";
        }
            
    }else{
        $_SESSION['error_login']= "Error en el inicio de sesion";
    }
} 
//redirigir

header("location:index.php");











?>