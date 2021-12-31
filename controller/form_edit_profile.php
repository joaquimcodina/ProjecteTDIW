<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){ //HEM OMPLERT LES DADES DEL FORMULARI, PASSEM A VALIDAR LES DADES
    include_once __DIR__.'/../model/connectBD.php';
    include_once __DIR__.'/../model/usuaris.php';
    $options = array( //RANG DEL CODI POSTAL
        'options' => array(
            'min_range' => 10000,
            'max_range' => 99999,
        )
    );

    //VALIDAR DADES DEL FORMULARI DE REGISTRE AMB FILTER_VAR, ABANS D'INSERIR-HO A LA BASE DE DADES
    if (filter_var($_POST['nom'], FILTER_SANITIZE_STRING) &&
        filter_var($_POST['correu'], FILTER_VALIDATE_EMAIL) &&
        filter_var($_POST['password'], FILTER_SANITIZE_STRING) &&
        filter_var($_POST['confirmpassword'], FILTER_SANITIZE_STRING) &&
        filter_var($_POST['address'], FILTER_SANITIZE_STRING) &&
        filter_var($_POST['poblacio'], FILTER_SANITIZE_STRING) &&
        filter_var($_POST['codipostal'], FILTER_VALIDATE_INT, $options) !== FALSE) {

        //PUGEM FOTO DE PERFIL
        $imgName = null;
        if ($_FILES['profile_image'] && !empty($_FILES['profile_image']) !== null) { //FILTRAMOS IMAGEN PASADA
            $imgName = basename($_FILES['profile_image']['name']);
            $imgPath = sprintf('%s%s', UPLOADS_PUBLIC_PATH, $imgName);
            move_uploaded_file($_FILES['profile_image']['tmp_name'], $imgPath); //INTRODUCIMOS IMAGEN EN EL DISCO DURO
        }

        //COMPROVEM QUE PASSWORD I CONFIRMPASSWORD SON IGUALS
        if($_POST['password'] === $_POST['confirmpassword']){
            $connexio = connectaBD();
            [$checkUser, $checkEmail] = getUserById($connexio);
            if($checkUser === $_POST['nom'] || $checkEmail === $_POST['correu']){
                $alert = 'Aquest usuari ja esta registrat';

            } else {
                modifyUser($connexio, $imgName);
                unset($_SESSION['nom_usuari'], $_SESSION['correu'], $_SESSION['password'], $_SESSION['adreça'],
                    $_SESSION['poblacio'], $_SESSION['codi_postal'], $_SESSION['foto']);
                $_SESSION['nom_usuari'] =  $_POST['nom'];
                $_SESSION['correu'] =  $_POST['correu'];
                $_SESSION['password'] =  $_POST['password'];
                $_SESSION['adreça'] =  $_POST['address'];
                $_SESSION['poblacio'] =  $_POST['poblacio'];
                $_SESSION['codi_postal'] =  $_POST['codipostal'];
                $_SESSION['foto'] =  $imgName;
                $alert = 'Hem modiificat les dades del usuari correctament';
            }

        } else{
            $alert = 'Les contrasenyes no coincideixen';
        }
    } else{
        $alert = 'Error en la validació de dades';
    }
}
include_once __DIR__.'/../view/form_edit_profile.php';
?>