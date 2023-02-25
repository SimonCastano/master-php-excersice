<?php require_once './includes/header.php' ?>
<div class="login">
    <h1>Registrarse</h1>
    <form action="register_validate.php" method="post">
        <?php if (isset($_SESSION['userCreated'])) : ?>

            <div class="succes-helper">
                <?= "<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path d='M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.804 3.587 20.412C3.195 20.02 2.99934 19.5493 3 19V5C3 4.45 3.196 3.979 3.588 3.587C3.98 3.195 4.45067 2.99934 5 3H19C19.55 3 20.021 3.196 20.413 3.588C20.805 3.98 21.0007 4.45067 21 5V19C21 19.55 20.804 20.021 20.412 20.413C20.02 20.805 19.5493 21.0007 19 21H5Z' fill='black'/>
                </svg>" .$_SESSION['userCreated'] ?>
            </div>
            <?php header("refresh:5;login.php");?>
        <?php elseif (isset($_SESSION['errors']['general'])) : ?>
            <div class="alert-helper">
                <?=  $_SESSION['errors']['general'] ?>
            </div>
        <?php endif; ?>


        <div class="input_container">
            <label for="nombre">Nombre</label>
            <input id="nombre" name="nombre" type="text" placeholder="Nombre">
            <?php echo isset($_SESSION['errors']) ? show_error($_SESSION['errors'], 'nombre') : '' ?>
        </div>
        <div class="input_container">
            <label for="apellido">Apellido</label>
            <input id="apellido" name="apellido" type="text" placeholder="Apellido">
            <?php echo isset($_SESSION['errors']) ? show_error($_SESSION['errors'], 'apellido') : '' ?>
        </div>
        <div class="input_container">
            <label for="email">Email</label>
            <input id="email" name="email" type="text" placeholder="Correo electronico">
            <?php echo isset($_SESSION['errors']) ? show_error($_SESSION['errors'], 'email') : '' ?>
        </div>
        <div class="input_container">
            <label for="pass">Contraseña</label>
            <input id="pass" type="password" name="pass" placeholder="Crear una contraseña">
            <?php echo isset($_SESSION['errors']) ? show_error($_SESSION['errors'], 'pass') : '' ?>
        </div>
        <input type="submit" name="submit_register" class="btn_submit" value="Regitrarse">
        <hr>
        <a href="login.php">Ya tengo cuenta</a>
    </form>
    <?php delete_errors(); ?>
</div>
<?php require_once './includes/footer.php' ?>