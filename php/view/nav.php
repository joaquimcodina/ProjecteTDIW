<?php

require_once __DIR__ . 'nav.php';

$action = isset($_GET['action']) ? $_GET['action'] : NULL;
switch ($action){
    case 'home':
        require __DIR__ . '../resource_home.php';
        break;
    case 'categories':
        require __DIR__ . '../resource_category_list.php';
        break;
    case 'artistes':
        require __DIR__ . '../resource_artists_list.php';
        break;
    case 'productes':
        require __DIR__ . '../resource_product_list.php';
        break;
    case 'register':
        require __DIR__ . '../../menu/form-register.html';
        break;
    case 'login':
        require __DIR__ . '../../menu/form-login.html';
        break;
    default:
        require __DIR__ . '../resource_home.php'; //Ira al Home
        break;
}