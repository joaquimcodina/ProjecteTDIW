<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <img src="../img/Logo_2.0.png" alt="Icona">
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample"><span aria-hidden="true"></span></a>
    </div>
    <div class="navbar-brand">
        <a href="<?php echo "?action=home".$action=''?>" class="nav-link active" onclick="checkActive(0);">Home</a>
        <a href="<?php echo "?action=".$action='categories'?>" class="nav-link" onclick="checkActive(1);">Categories</a>
        <a href="<?php echo "?action=".$action='artistes'?>" class="nav-link" onclick="checkActive(2);">Artistes</a>
        <a href="<?php echo "?action=".$action='productes'?>" class="navbar-item" onclick="checkActive(3);">Productes</a>
        <a href="<?php echo "?action=".$action='sobre'?>" class="navbar-item" onclick="checkActive(4);">Sobre</a>
        <a href="<?php echo "?action=".$action='contacte'?>" class="navbar-item" onclick="checkActive(5);">Contacte</a>
    </div>
    <div class="navbar-collapse">
        <a href="#" class="nav-link shopping-cart"><i class="fa fa-shopping-cart"></i></a>
        <a href="<?php echo "?action=".$action='register'?>" class="nav-link">Registrar</a>
        <a href="<?php echo "?action=".$action='login'?>" class="nav-link">Iniciar Sessió</a>
    </div>
</nav>