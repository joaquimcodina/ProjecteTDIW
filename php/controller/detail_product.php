<?php
require_once __DIR__ . '../model/connectBD.php';
require_once __DIR__ . '../products.php';
$products = getProductById(1);
require_once __DIR__ . '../view/product_list.php';