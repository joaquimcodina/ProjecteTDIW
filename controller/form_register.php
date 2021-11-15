<?php
if(isset($_POST['register']) && $_POST['password'] === $_POST['confirmpassword']){ //si em apretat al boto de registrar, comprovem que password i confirmpass son iguals
    include_once __DIR__.'/../model/connectBD.php';
    include_once __DIR__.'/../model/usuaris.php';
    $connexio = connectaBD();
    $checkUser = getUserById($connexio);
    if($checkUser < 1){ //comprovar que nom d'usuari no s'ha registrat
        registerUser($connexio); //Aquesta crida és al model
    }
}
include_once __DIR__.'/../view/form_register.php';
?>