<?php
if(isset($_POST['login'])){ //si em apretat al boto de registrar
    include_once __DIR__.'/../model/connectBD.php';
    include_once __DIR__.'/../model/usuaris.php';
    $connexio = connectaBD();
    $login = loginUser($connexio); //Aquesta crida és al model
}
include_once __DIR__.'/../view/form_login.php';
?>