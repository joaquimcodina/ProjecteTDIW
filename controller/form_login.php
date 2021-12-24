<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){ //HEM OMPLERT LES DADES DEL FORMULARI, PASSEM A VALIDAR LES DADES
    include_once __DIR__.'/../model/connectBD.php';
    include_once __DIR__.'/../model/usuaris.php';

    //VALIDAR DADES DEL FORMULARI DE LOGIN AMB FILTER_VAR, ABANS D'INSERIR-HO A LA BASE DE DADES
    if (filter_var($_POST['correu'], FILTER_VALIDATE_EMAIL) &&
        filter_var($_POST['password'], FILTER_SANITIZE_STRING)) {

        $connexio = connectaBD();
        $login = loginUser($connexio, $_POST['correu']);
        if (password_verify($_POST['password'], $login['password'])) {
            $_SESSION['correu'] =  $login['correu'];
            $_SESSION['nom_usuari'] =  $login['nom_usuari'];
            $alert = 'Benvingut, '.$_SESSION['nom_usuari']."!!";

        } else {
            $alert = 'Usuari i/o contrasenya incorrecte';
        }

    } else{
        $alert = 'Error en la validació de dades del login';
    }
}
include_once __DIR__.'/../view/form_login.php';
?>