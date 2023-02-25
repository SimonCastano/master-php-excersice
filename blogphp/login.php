<?php require_once './includes/header.php'?>
    <div class="login">
    <div class="alert-helper">
        </div>
            
            <?=  $_SESSION['error_login'] ?>
        <h1>Inicia sesion</h1>
        <form action="login.php" method="post">
            <div class="input_container">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="Correo electronico">
            </div>
            <div class="input_container">
                <label for="pass">Contraseña</label>
                <input id="pass" type="password" name="password" placeholder="Correo electronico">
            </div>
            <input class="btn_submit" type="submit" value="Iniciar sesion">
            <hr>
            <a href="register.php">Registrarse</a>
        </form>

    </div>
<?php require_once './includes/footer.php'?>