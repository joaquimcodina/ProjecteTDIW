<?php
if(isset($_POST['login'])){ //si em apretat al boto de registrar
    include_once __DIR__.'/../model/connectBD.php';
    include_once __DIR__.'/../model/usuaris.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $filters = filter_input_array(
            INPUT_POST,
            [
                'email' => FILTER_DEFAULT,
                'password' => FILTER_DEFAULT,
            ]
        );

        $email = $filters['email'];
        $password = $filters['password'];

        $user = login($email, $password);

        require __DIR__ . '/../model/home.php';
        return;
    }

    $connexio = connectaBD();
    $login = loginUser($connexio); //Aquesta crida és al model
}
include_once __DIR__.'/../view/form_login.php';
?>