<?php
require_once __DIR__ . '../model/connectBD.php';
require_once __DIR__ . '../usuaris.php';
$login = getUsers(); //Aquesta crida és al model
require_once __DIR__ . '../view/form_login.php.php';