<?php
const UPLOADS_PUBLIC_PATH = 'img/';
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
    case 'edit-profile':
        include __DIR__ . '/resource_form_edit_profile.php';
        break;
    case 'orders-user':
        include __DIR__ . '/resource_orders_user.php';
        break;
    case 'logout':
        include __DIR__ . '/resource_logout.php';
        break;
    default:
        include __DIR__ . '/resource_home.php';
        break;
}