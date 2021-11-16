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
        <a href="#" class="shopping-cart"><img src="../img/shopping-cart.png" alt="Shopping Cart"></a>
        <a href="<?php echo "?action=".$action='register'?>" class="nav-link">Registrar</a>
        <a href="<?php echo "?action=".$action='login'?>" class="nav-link">Iniciar Sessió</a>
    </div>
</nav>