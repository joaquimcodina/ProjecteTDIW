<?php
// index.php

$accio = $_GET['accio'];

switch($accio){
    case 'llistar-categories':
        include __DIR__.'/resource_category_list.php';
        break;
    case 'llistar-artistes':
        include __DIR__.'/resource_artists_list.php';
        break;
    case 'llistar-productes':
        include __DIR__.'/resource_product_list.php';
        break;
    default:
        include __DIR__.'/resource_home.php';
        break;
}