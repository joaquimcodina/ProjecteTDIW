<?php

require_once __DIR__ . 'nav.php/';

$action = $_GET['action']??null;
switch ($action){
    case 'home':
        require __DIR__ . 'nav.php/';
        break;
    case 'categories':
        require __DIR__ . 'nav.php/';
        break;
    case 'productes':
        require __DIR__ . 'nav.php/';
        break;
    case 'register':
        require __DIR__ . 'nav.php/';
        break;
    case 'login':
        require __DIR__ . 'nav.php/';
        break;
    default:
        require __DIR__ . 'nav.php/'; //Ira al Home
        break;
}