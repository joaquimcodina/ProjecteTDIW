<?php
require_once __DIR__ . '../model/connectBD.php';
require_once __DIR__ . '../products.php';
$products = getProductsHome();
require_once __DIR__ . '../view/home.php';