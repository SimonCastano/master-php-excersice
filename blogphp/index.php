<?php require_once './includes/header.php'?>
    <div class="blog_post_container">
        <h1>Ultimas entradas</h1>

        <?php if(isset($_SESSION['user'])): ?>

            <div class="loged_block">
                <?php 
                $user = $_SESSION['user'];  
                ?>
                <h5>Bienvenido <?= $user['nombre'] ?></h5>
            </div>

        <?php endif ?>
        <!-- entradas -->
        <?php require_once './includes/postlist.php'?>
    </div>
<?php require_once './includes/footer.php'?>
