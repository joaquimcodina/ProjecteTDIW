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

        //COMPROVEM QUE PASSWORD I CONFIRMPASSWORD SON IGUALS
        if($_POST['password'] === $_POST['confirmpassword']){
            $connexio = connectaBD();
            [$checkUser, $checkEmail] = getUserById($connexio);
            if($checkUser === true || $checkEmail === true){
                $alert = 'Aquest usuari ja esta registrat'; //COMPROVAR QUE L'USUARI NO S'HA REGISTRAT

            } else {
                registerUser($connexio);                    //Aquesta crida és al model, registrem el nostre usuari
                $alert = 'Registre realitzat amb èxit';
                header("Location:index.php?action=''");
            }

        } else{
            $alert = 'Les contrasenyes no coincideixen';
        }
    } else{
        $alert = 'Error en la validació de dades del registre';
    }
}
include_once __DIR__.'/../view/form_register.php';
?>