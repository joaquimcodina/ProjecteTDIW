<?php
    if(isset($_SESSION["id_usuari"])){
        unset($_SESSION['id_usuari'], $_SESSION['nom_usuari'], $_SESSION['correu'], $_SESSION['password'],
            $_SESSION['adreça'], $_SESSION['poblacio'], $_SESSION['codi_postal'], $_SESSION['foto']);
    }
    header("Location:index.php?action=login");
    exit();
?>
