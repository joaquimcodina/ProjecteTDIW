<?php
session_start();
$accio = isset($_GET['action']) ? $_GET['action'] : NULL;

switch($accio){
    case 'categories':
        include __DIR__ . '/resource_category_list.php';
        break;
    case 'artistes':
        include __DIR__ . '/resource_artists_list.php';
        break;
    case 'productes':
        include __DIR__ . '/resource_product_list.php';
        break;
    case 'register':
        include __DIR__ . '/resource_form_register.php';
        break;
    case 'login':
        include __DIR__ . '/resource_form_login.php';
        break;
    case 'cistell':
        include __DIR__ . '/resource_shopping_cart.php';
        break;
    case 'tramitar-comanda':
        include __DIR__ . '/resource_confirm_order.php';
        break;
    default:
        include __DIR__ . '/resource_home.php';
        break;
}