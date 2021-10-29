<?php
require_once __DIR__ . '../model/connectBD.php';
require_once __DIR__ . '../products.php';
$products = getProducts();
require_once __DIR__ . '../view/product_list.php';