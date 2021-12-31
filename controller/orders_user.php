<?php
include_once __DIR__.'/../model/connectBD.php';
include_once __DIR__.'/../model/orders.php';
include_once __DIR__.'/../model/products.php';

$connexio = connectaBD();
$comandes = getOrderByUser($connexio);
$productes = getProducts($connexio);
$liniaComandes = getOrderLine($connexio);

include_once __DIR__.'/../view/orders_user.php';
?>