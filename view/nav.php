<nav class="navbar">
    <a class="navbar-brand" href="<?php echo "?action=home".$action=''?>" rel="home">
        <div class="logo-image">
            <img src="../img/logo_simple.png" alt="Icona">
        </div>
    </a>
    <div class="navbar-left">
        <a href="<?php echo "?action=home".$action=''?>" class="nav-item">Home</a>
        <a href="<?php echo "?action=".$action='categories'?>" class="nav-tem">Categories</a>
        <a href="<?php echo "?action=".$action='artistes'?>" class="nav-item">Artistes</a>
        <a href="<?php echo "?action=".$action='productes'?>" class="navbar-item">Productes</a>
        <a href="<?php echo "?action=".$action='sobre'?>" class="navbar-item">Sobre</a>
        <a href="<?php echo "?action=".$action='contacte'?>" class="navbar-item">Contacte</a>
    </div>
    <div class="navbar-right">
        <?php if(isset($_SESSION['correu'])){ ?>
            <ul>
                <li><a href="<?php echo "?action=".$action='cistell'?>" class="shopping-cart"><img src="../img/shopping-cart.png" alt="Shopping Cart"></a>
                    <?php if(isset($_SESSION['foto']) && $_SESSION['foto'] !== "") { ?>
                        <a href="" class="shopping-cart"><img src="<?php echo UPLOADS_PUBLIC_PATH.$_SESSION['foto']?>" alt="User Menu"></a>
                    <?php } else { ?>
                        <a href="" class="shopping-cart"><img src="../img/user-icon.png" alt="User Menu"></a>
                    <?php } ?>
                    <ul>
                        <li><a href="<?php echo "?action=".$action='orders-user'?>" class="nav-link">Comandes</a></li>
                        <li><a href="<?php echo "?action=".$action='edit-profile'?>" class="nav-link">Editar Perfil</a></li>
                        <li><a href="<?php echo "?action=".$action='logout'?>" class="nav-link">Tancar Sessió</a></li>
                    </ul>
                </li>
            </ul>
        <?php } else {?>
            <ul>
                <li><a href="<?php echo "?action=".$action='cistell'?>" class="shopping-cart"><img src="../img/shopping-cart.png" alt="Shopping Cart"></a>
                    <a href="" class="shopping-cart"><img src="../img/user-icon.png" alt="User Menu"></a>
                    <ul>
                        <li><a href="<?php echo "?action=".$action='register'?>" class="nav-link">Registrar</a></li>
                        <li><a href="<?php echo "?action=".$action='login'?>" class="nav-link">Iniciar Sessió</a></li>
                    </ul>
                </li>
            </ul>
        <?php } ?>
    </div>
</nav>